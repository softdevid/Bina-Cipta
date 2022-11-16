<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required|min:5"
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended("/admin-dashboard");
        }
        return back()->with("error", "Gagal Login!!!");
    }
}