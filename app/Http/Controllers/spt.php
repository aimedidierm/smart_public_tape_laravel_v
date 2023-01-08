<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spt extends Controller
{
    //
    function index()
    {
        return view('loginpage');
    }
    function login(Request $req)
    {
        return 'Hello';
    }
}
