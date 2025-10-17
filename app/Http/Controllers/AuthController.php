<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Show register form
    public function showRegister()
    {
        return view('konten.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:buat_akun,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::table('buat_akun')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to login after successful registration
        return redirect('/login')->with('success', 'Account created. Please login.');
    }

    // Show login form
    public function showLogin()
    {
        return view('konten.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = DB::table('buat_akun')->where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Save user id in session
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            return redirect('/')->with('success', 'Logged in successfully.');
        }

        return redirect('/login')->withErrors(['login' => 'Invalid email or password.'])->withInput();
    }

    // Handle logout
    public function logout(Request $request)
    {
        $request->session()->forget(['user_id', 'user_name']);
        return redirect('/');
    }
}
