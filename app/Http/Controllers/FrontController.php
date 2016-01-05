<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);

        return view('home.index', compact('products'));  // ['products'=>$products] Pagination pour 5
    }


}