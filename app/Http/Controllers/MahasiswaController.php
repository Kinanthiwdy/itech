<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function getFileUploadForm()
    {
        return view('formadmin');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlsx,xls,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',

        ]);
 
        $fileName = $request->file->getClientOriginalName();
        $filePath = 'uploads/' . $fileName;
 
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->file));
        $path = Storage::disk('public')->url($path);
 
        // Perform the database operation here
 
        return back()
            ->with('success','File has been successfully uploaded.');
    }
}
