<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register'); 
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'Fname' => 'required|string|max:255',
            'Lname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        return redirect()->route('home')->with('user', $validated);
    }

    public function homePage()
    {
        $user = session('user');

        if (!$user) {
            return redirect('/register');
        }

        return view('home', compact('user'));
    }
}

