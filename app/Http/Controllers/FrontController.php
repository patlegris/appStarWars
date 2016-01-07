<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use View;
use App\Product;
use App\Category;
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
        $products = Product::with('tags', 'category', 'picture')->paginate(5);
        $title = " Welcome Home page";

        return view('front.index', compact('products', 'title'));
    }

    public function showProduct($id)
    {
//        try{
//            $product = Product::findOrFail($id);
//        }catch(\Exception $e)
//        {
//           // dd($e->getMessage()); // var_dump customisé + die
//
//            return view('front.no_product');
//        }

        $product = Product::findOrFail($id);

        $title = " Page product:{$product->name}";

        return view('front.show', compact('product', 'title'));
    }

    public function showContact()
    {
        return view('front.contact');
    }

    public function storeContact(Request $request)
    {
//        session_start();

        $validator = Validator::make($request->all(), [
            'email' => 'required|email', // field du formulaire => Regex de vérif mail
            'content' => 'required|max:200'
        ]);

//        dd($validator->fails());
//
        if ($validator->fails()) return back()->withInput()->withErrors($validator);
//
//        $this->validate($request, [
//            'email' => 'required|email'
//        ]);
//
//        return redirect('contact')->with([
//            'message' => trans('app.contactSuccess'),
//            'form'    => false
//        ]);
    }
}