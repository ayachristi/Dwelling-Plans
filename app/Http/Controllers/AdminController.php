<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;
use App\Models\OrderCart;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }

    public function generate_order()
    {
        $invoice = OrderCart::query()
            ->select('*', 'products.*')
            ->join('orders', 'order_carts.order_id', '=', 'orders.order_id')
            ->join('carts', 'order_carts.cart_id', '=', 'carts.cart_id')
            ->join('products', 'carts.product_id', '=', 'products.product_id')
            ->get();

        // SELECT *, products.* FROM `order_carts` JOIN orders ON order_carts.order_id = orders.order_id JOIN carts ON order_carts.cart_id = carts.cart_id JOIN products ON carts.product_id = products.product_id;

        $pdf = Pdf::loadView('generate_invoice', compact('invoice'));

        return $pdf->download(date('Y-m-d') . 'INVOICE.pdf');

        // return view('student_report', compact('students'));
    }
}
