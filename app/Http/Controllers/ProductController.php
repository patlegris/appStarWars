<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {

        $products = Product::paginate(5);

        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        if (!is_null($request->file('thumbnail'))) {
            $im = $request->file('thumbnail');

            // estension de l'image
            $ext = $im->getClientOriginalExtension();

            $uri = str_random(12) . '.' . $ext;

            $im->move(env('UPLOAD_PATH', './uploads'), $uri);

            Picture::create ([
                'uri' => $uri,
                'size' => $im->getSize(),
                'type' => $ext,
                'product_id' => $product->id
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        return "show ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
//        $product = Product::find($id);
//
//        $product->name='foo';
//
//        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Product::destroy($id);
        return back()->with('Product deleted');
    }

    public function changeStatus ($id)
    {
        $product = Product::find($id);

        $product = ($product->status == 'opened') ? 'closed' : 'opened';

        $product->save();

        return back()->with(['message' => trans('app.changeStatus')]);
    }
}
