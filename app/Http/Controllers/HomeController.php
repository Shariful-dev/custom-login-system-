<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('dashboard');
    }

    public function logout(Request $request)
    {
      Auth::logout();
      return redirect('/login');
    }
}
