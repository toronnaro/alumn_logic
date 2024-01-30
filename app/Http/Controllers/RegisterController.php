<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // Show Register Form
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Login'
        ]);
    }

    // Create a User
    public function store(Request $request)
    {
        // Validation For User Register
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Make The Password Will Be Bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create
        User::create($validatedData);

        // Redirect To Login View With Flash Massage
        return redirect('/login')->with('success', 'Registration Succesed, Please Login!');
    }
}
