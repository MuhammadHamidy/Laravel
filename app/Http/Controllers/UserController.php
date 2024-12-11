<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup()
    {
        $data = request()->all();
        session()->put('user', $data);
        return redirect('/signin')->with('success', 'Registration Successful!');
    }
    
    public function signin()
    {
        $data = session()->get('user');
        if ($data && $data['email'] === request('email') && $data['password'] === request('password')) {
            session()->put('logged_in', true);
            return redirect('/blog');
        }
        return redirect('/blog')->withErrors('Invalid credentials!');
    }
}

