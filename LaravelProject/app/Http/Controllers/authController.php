<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    
    public function register() {
        return view('register/register');
    }

    public function send(Request $request) {
        return view('page/register');
    }
}
