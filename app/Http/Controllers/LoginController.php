<?php

namespace App\Http\Controllers;

// Manual Authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    // Show Login Form
    public function index()
    {
        return view('login.login', [
            "title" => "Login",
        ]);
    }

    // Authentication Session
    public function authenticate(Request $request)
    {
        // Validate For The Login (Email & Passsword)
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // If the credentials is true, Regenerate To Any View(exp.Dashboard)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/siswa');
        }

        // If Login is Failed, Back To First View (Login View)
        return back()->with('loginError', 'Login Failed!');
    }

    // Function For logout
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
