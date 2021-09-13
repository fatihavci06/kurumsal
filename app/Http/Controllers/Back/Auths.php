<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Models\userstatus;

class Auths extends Controller
{
    //
    public function login(){
        return view('back.auth.login');
    }
    public function loginpost(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
    // Authentication was successful...
            if(Auth::user()->bilgiuye->status==0){
                 return redirect()->route('admin.login')->withErrors('Email adresi ve şifre hatalı');
            }
            return redirect()->route('admin.dashboard');
    }
        return redirect()->route('admin.login')->withErrors('Email adresi ve şifre hatalı');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}