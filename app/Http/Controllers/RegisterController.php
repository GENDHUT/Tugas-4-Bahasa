<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:225'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create('$validatedData');

        // $request->session()->flash('success', 'Registrasi berhasil silahkan login');

        return redirect('/login')->with('success', 'Registrasi berhasil silahkan login');
    }
}
