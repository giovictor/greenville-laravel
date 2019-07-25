<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()) {
            $user = User::where('email', Auth::user()->email)->first();
            if($user->isAdmin) {
                return view('admin.dashboard');
            } else {
                return view('borrower.homepage');
            }
        }
        return view('borrower.homepage');
    }
}
