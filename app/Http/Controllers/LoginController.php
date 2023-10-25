<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        // $credentials = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);



        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     $user = Auth::User();

        //     if($user->role == 'operator'){
        //         return redirect()->intended('/dashboard_opt');
        //     }elseif($user->role == 'mahasiswa'){
        //         return redirect()->intended('/dashboard_mhs');
        //     }


        //     // }else if(Auth::user()->role == 'dosenwali'){
        //     //     return redirect()->intended('/dashboard_dsn');
        //     // }else if(Auth::user()->role == 'departemen'){
        //     //     return redirect()->intended('/dashboard_dpt');
        //     //
        //     // }

        // }
        // else {
        //     // dd('Authentication Failed: ', Auth::attempt($credentials));
        //     return back()->with('loginError', 'Login Failed');
        // }

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard_opt');
        } else {
            Log::error('Auth attempt failed for user: ' . $credentials['email']);
            return back()->with('loginError', 'Login Failed');
        }

    }
}
