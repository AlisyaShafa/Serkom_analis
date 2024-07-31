<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function autentikasi(Request $request) {
        //dd($request->all());
        $akun = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($akun)) {
            $request->session()->regenerate();

            return redirect()->intended('/hero');
        } else {

        return redirect('/login')->withErrors('Akun yang anda masukkan salah');
        }
    }

    // Session::flash('email', $request->email)
    // $request->validate([
    //     'email' => 'required',
    //     'password' => 'required'
    // ], [
    //     'email.required' => $request->email,
    //     'password.required' => $request->password
    // ]);

    // $akun = [
    //     'email' => $request->email,
    //     'password' => $request->password
    // ];
    // if (Auth::attempt($akun)) {
    //     return 'sukses';
    // } else {
    //     return redirect('/login')->withErrors('Akun yang anda masukkan salah');
    // }

}
