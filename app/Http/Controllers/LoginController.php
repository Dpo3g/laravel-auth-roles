<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    /**
     * Check user auth and redirect if logined or show login form if not
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            //return redirect('/dashboard');
            return view('auth.login');
        } else {
            return view('auth.login');
        }
    }
}
