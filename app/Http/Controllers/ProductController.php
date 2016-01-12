<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\tag;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
//        $products = Product::all;
        $products = Product::all();
        return view('admin.product', $products);
    }
}
