<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'nim' => 'required|string|max:20',
            'semester' => 'required|integer|min:1|max:14',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->gender = $request->input('gender');
        $user->nim = $request->input('nim');
        $user->semester = $request->input('semester');
      

        return redirect('/dashboard')->with('success', 'Profil berhasil diperbarui.');
    }
}
