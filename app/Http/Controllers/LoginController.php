<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('login');
        }
    }


    // public function actionlogin(Request $request)
    // {
    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::attempt($data)) {
    //         return redirect()->intended('home');
    //     }

    //     else{
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/');
    //     }
    // }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
