<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authentic(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
=======
use illuminate\Support\Facades\auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authentic(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87
        }

        return back()->with('LoginError', 'Login gagal');
    }
<<<<<<< HEAD

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
=======
>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87
}
