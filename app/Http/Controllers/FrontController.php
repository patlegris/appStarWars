<?php

namespace App\Http\Controllers;


use View;
use Mail;
use App\Product;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Menu\TraitMainMenu;

class FrontController extends Controller
{

    use TraitMainMenu;

    public function __construct()
    {
        $this->getMenu();
    }

    public function index()
    {
        $products = Product::with('tags', 'category', 'picture')->online()->paginate(5);
        $title = " Welcome Home page";

        return view('front.index', compact('products', 'title'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        $title = " Page product:{$product->name}";
        $quantities = range(1, $product->quantity);

        return view('front.show', compact('product', 'title', 'quantities'));
    }

    public function showProductByCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products()->with('tags', 'category', 'picture')->paginate(5);

        $title = " Welcome category page {$category->title}";

        return view('front.category', compact('products', 'title'));
    }

    public function showContact()
    {
        $title = " Page contact";

        return view('front.contact', compact('title'));
    }

    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'content' => 'required|max:255'
        ]);

        $content = $request->input('content');

        Mail::send('emails.contact', compact('content'), function ($m) use ($request) {
            $m->from($request->input('email'), 'Client');

            $m->to(env('EMAIL_TECH'), 'admin')->subject('Contact e-boutique');
        });

        return redirect('contact')->with([
            'message' => trans('app.contactSuccess'),
            'alert'   => 'success'
        ]);
    }

}