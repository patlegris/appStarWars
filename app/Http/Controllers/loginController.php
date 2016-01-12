<?php

namespace App\Http\Controllers;

use View;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Menu\TraitMainMenu;

class LoginController extends Controller
{

    use ThrottlesLogins, TraitMainMenu;

    public function __construct()
    {
        $this->getMenu();
    }

    public function login(Request $request)
    {
        if (Auth::check()) return redirect()->intended('dashboard');

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
                'remember' => 'in:true'
            ]);

            $remember = !empty($request->input('remember')) ? true : false;

            dd($remember);
//
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $remember)) {
                return redirect()->intended('product');
            } else {
                return back()->withInput($request->only('email', 'remember'))->with(['message' => trans('app.noAuth'), 'alert' => 'warning']);
            }
        } else {
            return view('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->home();
    }
}