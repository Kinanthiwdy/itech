<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{

    public function beranda(){
        return view('dashboard');
    }

    public function register(){
        return view('register');
    }

    public function materi(){
        return view('materi');
    }

    public function kontak(){
        return view('kontak');
    }
    public function quiz(){
        return view('quizz');
    }
    public function biodata(){
        return view('biodata');
    }
    public function dashadmin(){
        return view('dashadmin');
    }
    public function showloginmin(){
        return view('loginmin');
    }

      public function loginmin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashadmin');
        }

        // Jika login gagal, tambahkan pesan error dan redirect ke halaman login
        return redirect()->route('loginmin')->with('error', 'Invalid credentials');
    }
}
