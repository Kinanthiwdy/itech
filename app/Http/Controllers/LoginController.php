<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('');
        } else {
            return view('login');
        }
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'Email atau Password salah',
        ]);
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
