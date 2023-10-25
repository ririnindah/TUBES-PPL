<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::User()->role == 'operator'){
                return redirect()->intended('/dashboard_opt');
            }else if(Auth::User()->role == 'mahasiswa'){
                return redirect()->intended('/dashboard_mhs');
            }


            // }else if(Auth::user()->role == 'dosenwali'){
            //     return redirect()->intended('/dashboard_dsn');
            // }else if(Auth::user()->role == 'departemen'){
            //     return redirect()->intended('/dashboard_dpt');
            //
            // }


        }else{
            return back()->with('loginError', 'Login Failed');
        }

    }
}
