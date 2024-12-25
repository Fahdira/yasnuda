<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function register(){

        return view('pages.auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $input = $request->all();
        Guest::create($input);
        
        return redirect()->route('login')->with('message', 'Akun telah dibuat');
    }

    public function login(){

        if(session()->has('users')){
            session()->flush('email');
        }

        return view('pages.auth.login');
    }

    public function postLogin(Request $request){

        $user = Guest::where('email','=',$request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            $request->session()->put('users', $user['email']);
            return redirect()->route('dashboard')->with('success','Berhasil Login');
          }else{
            return redirect()->route('login')->with('error', 'Username atau Password Salah');
          }
    }

    public function logout() {
        if (session()->has('users')){
            session()->flush('email');
            session()->regenerate();
        }
        return redirect()->route('login')->with('logout', 'Berhasil Logout');
    }
}
