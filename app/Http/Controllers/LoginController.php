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
<<<<<<< HEAD
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

=======
        
>>>>>>> 3405c9a9c7190a86123f837a3dab2e28c4d6806f
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
<<<<<<< HEAD

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard_opt');
        } else {
            Log::error('Auth attempt failed for user: ' . $credentials['email']);
=======
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
>>>>>>> 3405c9a9c7190a86123f837a3dab2e28c4d6806f
            return back()->with('loginError', 'Login Failed');
        }

    }
}
