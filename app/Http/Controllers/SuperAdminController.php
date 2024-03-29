<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Storey;
use App\Models\Order;
use App\Models\OrderCart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function show_register_admin()
    {
        return view('register_admin');
    }

    public function register_admin(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->account_type = 'admin';
        $user->save();

        return redirect("/admin/accounts")->with('message', 'Added Admin Successfully');
    }

    public function superadmin_dashboard()
    {
        return view('superadmin_dashboard');
    }

    public function admin_show_products()
    {

        $product = DB::table('products')
            // ->select('products.*')
            ->join('storey', 'storey.storey_id', '=', 'products.storey_id')
            ->select('products.*', 'storey.*')
            ->orderBy('products.product_id', 'desc')
            ->paginate(5);

        return view('admin_products', compact('product'));
    }

    public function delete_product(string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->delete();

        return redirect('admin/products');
    }

    public function register_admin_show()
    {
        $total_admin = User::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->where('account_type', '=', 'admin')
            ->get()
            ->first();

        $admin = User::query()
            ->select('*')
            ->where('account_type', '=', 'admin')
            ->get();

        return view('admin_show', compact('total_admin', 'admin'));
    }

    public function delete_admin(string $id)
    {
        $user = User::where('user_id', '=', $id)
            ->delete();

        return redirect('admin/accounts');
    }

    public function show_admin(string $id)
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->get()
            ->first();

        return view('show_admin_account', compact('user'));
    }

    public function show_all_orders()
    {
        $orders = Order::query()
            ->select('order_id', 'time_placed', 'status', 'orders.user_id', 'first_name', 'last_name')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('admin_orders', compact('orders'));

        // SELECT * FROM `order_carts` JOIN orders ON order_carts.order_id = orders.order_id JOIN carts ON order_carts.cart_id = carts.cart_id WHERE carts.product_id;

        // SELECT order_carts.*, orders.*, carts.*, products.title, products.design, products.description FROM order_carts JOIN orders ON order_carts.order_id = orders.order_id JOIN carts ON order_carts.cart_id = carts.cart_id JOIN products ON carts.product_id = products.product_id;
    }

    public function show_order(string $id)
    {
        $orders = OrderCart::query()
            ->select('order_carts.*', 'orders.*', 'carts.*', 'products.*')
            ->join('orders', 'order_carts.order_id', '=', 'orders.order_id')
            ->join('carts', 'order_carts.cart_id', '=', 'carts.cart_id')
            ->join('products', 'carts.product_id', '=', 'products.product_id')
            ->where('carts.product_id', '=', $id)
            ->get();

        $user_info = Order::query()
            ->select('orders.*', 'last_name', 'first_name', 'email', 'status')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->where('orders.order_id', '=', $id)
            ->get()
            ->last();

        return view('admin_show_order', compact('orders', 'user_info'));
    }

    public function update_order_status(Request $r, string $id)
    {
        Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => $r->input("status")
                ]
            );

        $order = Order::query()
            ->select('status', 'user_id')
            ->where('order_id', '=', $id)
            ->get()
            ->first();

        // $notif = new Notification;

        // switch ($order->status) {
        //     case "accepted":
        //         $notif->content = "Your order has been accepted! Please wait for your order to be completed and delivered.";
        //         break;
        //     case "delivering":
        //         $notif->content = "Your order is on the way! Please be ready with your payment.";
        //         break;
        //     case "delivered":
        //         $notif->content = "Your order has been delivered, enjoy! Please mark the order as received.";
        //         break;
        // }

        // $notif->redirect = "/orders/" . $id;
        // $notif->user_id = $order->user_id;
        // $notif->save();

        return redirect('/admin/orders/' . $id . '/view')->with('success', 'Updated order status to ' . $r->input("status"));
    }

    public function accept_order(string $id)
    {
        $order = Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => 'accepted',
                ]
            );

        return redirect('/admin/orders/' . $id . '/view')->with('success', 'Updated order status to accepted.');
    }

    public function view_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        if (Session::get('user_id') == $orders[0]->user_id) {
            $grand_total = Order::query()
                ->select(DB::raw('SUM(price * quantity) AS grand_total'))
                ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
                ->join('products', 'orders_products.product_id', '=', 'products.product_id')
                ->where('orders.order_id', '=', $id)
                ->get()
                ->first();

            $status = $orders[0]->status;
            $progress_percent = 0;

            switch ($status) {
                case "waiting":
                    $progress_percent = 10;
                    break;
                case "accepted":
                    $progress_percent = 25;
                    break;
                case "preparing":
                    $progress_percent = 50;
                    break;
                case "delivering":
                    $progress_percent = 70;
                    break;
                case "delivered":
                    $progress_percent = 90;
                    break;
                case "finished":
                    $progress_percent = 100;
                    break;
                case "cancelled":
                    $progress_percent = 0;
                    break;
            }

            return view('order_show', compact('orders', 'grand_total', 'progress_percent'));
        } else {
            return redirect('/orders')->with('fail', "Unauthorized access! Incorrect user logged in.");
        }
    }

    public function registered_users()
    {
        $total_users = User::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->where('account_type', '=', 'user')
            ->get()
            ->first();

        return view('superadmin_dashboard', compact('total_users'));
    }
}
