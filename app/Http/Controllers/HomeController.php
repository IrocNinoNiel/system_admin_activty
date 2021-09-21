<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->user_type == 'admin'){
            return view('admin');
        }

        if(Auth::user()->user_type == 'student'){
            return view('student');
        }

        if(Auth::user()->user_type == 'accountant'){
            return view('accountant');
        }

        if(Auth::user()->user_type == 'secretary'){
            return view('secretary');
        }

        if(Auth::user()->user_type == 'cashier'){
            return view('cashier');
        }
    }
}
