<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\User;
=======
use app\Models\User;
>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87
use Illuminate\Http\Request;

class RegisterController extends Controller
{
<<<<<<< HEAD
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

        User::create($request->all());
=======
    public function index(){
        return view('Register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=> 'required|max:255|min:3|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:5|max:225'
        ]);

        $validatedData['password'] =bcrypt($validatedData['password']);

        User::create('$validatedData');
>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87

        // $request->session()->flash('success', 'Registrasi berhasil silahkan login');

        return redirect('/login')->with('success', 'Registrasi berhasil silahkan login');
<<<<<<< HEAD
=======



>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87
    }
}
