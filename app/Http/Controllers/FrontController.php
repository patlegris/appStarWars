<?php

namespace App\Http\Controllers;

use App\Category;
use View;

//use App\Show;
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
        $title = "welcome home page";

        return view('front.index', compact('products', 'title'));
    }

    public function showProduct($id)
    {
//        $products = Product::with('tags', 'category', 'picture');
//        return view('front.product', $products->$id);

        // todo with optimized model for one result
//        try {
        $product = Product::findOrFail($id);
//        } catch(\Exception $e) {
//            dd($e->getMessage()); // var dump customisé + die
//            return view('front.no_product');
//        }
        $title = " Page product:{$product->name}";
        return view('front.show', compact('product', 'title'));
    }

    public function contact()
    {
        $title = " Page contact";
        return view('front.contact', compact('title'));
    }
}