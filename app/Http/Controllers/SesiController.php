<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{   
    function index ()
    {
        $user = User::all();
        $eskul = eskul::all();

        return view('login',compact('user','eskul'));
    }
    function login (Request $req)
    {   
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Harus Diisi!',
            'password.required' => 'Password Harus Diisi!',
        ]);

        $infologin = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/home/admin');
            }
            elseif (Auth::user()->role == 'user'){
                return redirect('/user');
            }
        }else{
            return redirect('/login')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function signup(Request $req)
    {   

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'id_eskul' => 'required'
        ],[
            'name.required' => 'Nama Harus Diisi',
            'email.required' => 'Email Harus Diisi!',
            'password.required' => 'Password Harus Diisi!',
            'id_eskul.required' => 'Ini Harus Diisi'
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'id_eskul' => $req->id_eskul
        ]);

        return redirect('/login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
