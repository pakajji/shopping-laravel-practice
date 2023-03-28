<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\product;

class ProductController extends Controller
{
    function index() {
        $product = product::all();

        return view("product.item", compact('product'));
    }

    function cart($id) {
        $product = product::find($id);

        return view("product.cart", compact('product'));
    }

}
