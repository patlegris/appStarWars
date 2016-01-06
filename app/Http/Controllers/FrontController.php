<?php

namespace App\Http\Controllers;

use App\Category;
use View;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct()
    {
        View::composer('partials.nav', function ($view) {

            $categories = Category::all();
            $view->with(compact('categories'));
        });
    }


    public function index()
    {
        $products = Product::with('tags', 'category', 'picture')->paginate(5); // ['products'=>$products] Pagination pour 5
        return view('front.index', compact('products', 'title'));
    }

    public function showProduct($id)
    {
        $products = Product::with('tags', 'category', 'picture');
        return view('front.product', compact('products', 'title'));
    }
}