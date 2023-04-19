<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Function Load View
    public function login()
    {
        return view('auth.login', [
            'title'     => 'Login Klinik'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'  => ['required', 'email:dns'],
            'password'  => 'required|min:5|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
