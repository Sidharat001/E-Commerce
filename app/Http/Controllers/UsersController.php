<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password'
        ]);

        print_r($request->all());
    }
}
