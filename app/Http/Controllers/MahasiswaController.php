<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
