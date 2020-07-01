<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function showRegistration()
    {
        return view('register');
    }
        public function showwelcome(Request $request)
    {
        return view('welcome',['namef'=>$request->input('firstname'),'namel'=>$request->input('lastname')]);
    }
}