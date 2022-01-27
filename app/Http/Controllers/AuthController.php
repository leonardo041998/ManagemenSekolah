<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function login()
    {
        Toastr::Info('Berhasil Registrasi', 'Success');
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            Toastr::info('Anda berhasil Login', 'Success');
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
