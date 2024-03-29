<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class AjaxController extends Controller
{
    public function view_search(){
        return view('message');
    }

    public function view_search_id(string $id){
        $products = Product::query()
            ->select('*')
            ->where('design','LIKE', $id .'%') 
            ->orWhere('title', 'LIKE', $id .'%')
            ->orWhere('lot_area', 'LIKE', $id .'%')
            ->orWhere('description', 'LIKE', '%' . $id . '%')
            ->get();

        return response()->json($products);
        
    }
}



// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;

// class AjaxController extends Controller {
//    public function index() {
//       $msg = "This is a simple message.";
//       return response()->json(array('msg'=> $msg), 200);
//    }
// }