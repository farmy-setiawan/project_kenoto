<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index()
    {
        return view('halaman_auth/login');
    }

    function login(Request $request)
    {
        //
    }

    function create()
    {
        //
    }

    function register(Request $request)
    {
        //
    }
}
