<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('frontend/admin/login');
    }
    public function login(Request $request)
    {

    }
    public function signUp(Request $request)
    {

    }
}
