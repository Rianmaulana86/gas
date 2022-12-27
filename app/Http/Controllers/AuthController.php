<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth/login");
    }

    public function log(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required'
        ]);

        if(Auth::attempt($loginData))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login gagal!!');
    }
    public function index()
    {
        return view('auth.registrasi');
    }
    public function store(Request $request)
    {
        $dataUser = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:3'
        ]);
        $dataUser['password'] = Hash::make($dataUser['password']);

        User::create($dataUser);

        return redirect('/login')->with('succes', 'Akub Berhasil di buat');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logout', 'Akun anda telah Logout.');

    }
}
