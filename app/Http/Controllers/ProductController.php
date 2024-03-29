<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Storey;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Kyslik\ColumnSortable\Sortable;
// use App\Models\Product;


class ProductController extends Controller
{

    public function search_products(string $id){
        $products = Product::query()
            ->select('*')
            ->join('storey', 'products.storey_id', '=', 'storey.storey_id')
            // ->where('design','LIKE', $id .'%') 
            ->where('title', 'LIKE','%'. $id .'%')
            ->orWhere('lot_area', 'LIKE', $id .'%')
            // ->where('description', 'LIKE', '%' . $id . '%')
            ->get();

        return response()->json($products);
        
    }

    public function products()
    {
        $products = Product::query()
            ->select('*')
            ->join('storey', 'products.storey_id', '=', 'storey.storey_id')
            ->paginate(8);


        return view('product', compact('products'));
    }

    public function add_product(Request $r)
    {
        $product = new Product;
        $product->storey_id = $r->input('storey_id');
        $product->design = $r->input('design');
        $product->description = $r->input('description');
        $product->lot_area = $r->input('lot_area');
        $product->title = $r->input('title');
        if ($r->file('image_3d')) { //switch case
            $file = $r->file('image_3d');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->image_3d = $filename;
        }
        if ($r->file('floor_plan_image')) {
            $file = $r->file('floor_plan_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->floor_plan_image = $filename;
        }
        if ($r->file('interior_image')) {
            $file = $r->file('interior_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->interior_image = $filename;
        }

        $product->save();

        return redirect("admin/products")->with('message', 'Added Product Successfully');

        //return view('faculty', compact('faculties', 'faculties_dept', 'faculties_points'));

    }

    public function add_product_form()
    {
        return view('product_create');
    }

    public function edit_product(Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->update(
                [
                    'title' => $r->input('title'),
                    'design' => $r->input('design'),
                    'description' => $r->input('description'),
                    'lot_area' => $r->input('lot_area'),
                ]
            );

        if ($r->file('image_3d')) {
            $file = $r->file('image_3d');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);

            Product::where('product_id', '=', $id)
                ->update(
                    [
                        'image_3d' => $filename
                    ]
                );
        }

        if ($r->file('floor_plan_image')) {
            $file = $r->file('floor_plan_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);

            Product::where('product_id', '=', $id)
                ->update(
                    [
                        'floor_plan_image' => $filename
                    ]
                );
        }

        if ($r->file('interior_image')) {
            $file = $r->file('interior_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);

            Product::where('product_id', '=', $id)
                ->update(
                    [
                        'interior_image' => $filename
                    ]
                );
        }

        return redirect('/admin/products');
    }

    public function edit_product_form(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->get()
            ->first();

        return view('product_edit', compact('product'));
    }

    public function show_product(string $id)
    {
        // $product = Product::query()
        //     ->select('*')
        //     ->where('product_id', '=', $id)
        //     ->get()
        //     ->first();

        // $product = DB::table('products')
        //     // ->select('products.*')
        //     ->join('storey', 'storey.storey_id', '=', 'products.storey_id')
        //     ->select('products.*', 'storey.*')
        //     ->get()
        //     ->first();

        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->join('storey', 'products.storey_id', '=', 'storey.storey_id')
            ->get()
            ->first();

        return view('product_show', compact('product'));
    }

    public function showStorey()
    {
        $product = DB::table('products')
            // ->select('products.*')
            ->join('storey', 'storey.storey_id', '=', 'products.storey_id')
            ->select('product.*,storey.*')
            ->get();

        dd($product);
    }

    public function index()
    {
        try {
            $storey = Storey::first();
            $products = Product::all();

            return view('product', compact('storey', 'products'));
        } catch (\Exception $e) {

            dd($e->getMessage());
        }
    }
}
