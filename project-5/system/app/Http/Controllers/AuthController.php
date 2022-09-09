<?php

namespace App\Http\Controllers;
use Auth;


class AuthController extends Controller
{
    function showlogin_admin(){
        return view('admin.section.login_admin');
    }

    function login_adminprocess(){
       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        return redirect('beranda')->with('seccess', 'Login Berhasil');
       }else{
        return back()->with('danger', 'Login Gagal, Silahkan cek ulang email dan password anda');
       }
    }

    function logout(){
        Auth::logout();
        return redirect('beranda');
    }

    function registration(){

    }

    function forgotpassword(){

    }
}