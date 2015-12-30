<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function show($id,$slug)
    {
        var_dump ($slug);
        return Post::find($id);
    }
}
