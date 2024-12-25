<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Guest;
use App\Models\Rekening;
use App\Models\Contact;
use App\Models\Price;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home(){

        $posts = Posts::orderBy('created_at', 'desc')
                        ->with('user')
                        ->take(3)
                        ->get();
        return view('pages.home', compact('posts'));
    }

    public function blog(){

        return view('pages.blog');
    }

    public function dashboard(){

<<<<<<< HEAD
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $contact = Contact::All();
            $rek = Rekening::with('bank')->get();
            $price = Price::All();
            $pend = Pendaftaran::orderBy('created_at')->first();
            return view('pages.dashboard', compact('users','contact','rek','price','pend'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public  function informasi() {
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $pend = Pendaftaran::orderBy('created_at')->first();
            return view('pages.informasi', compact('users','pend'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
=======
        return view('pages.user.dashboard');
>>>>>>> 48e8a678e2303bcfae6a64f5950a9a49c768f074
    }

    public function profile(){

<<<<<<< HEAD
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.profile', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function edit() {
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.editprofile', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function update(Request $request) {
        if (session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $users->username = $request->input('username');
            $users->no_telp = $request->input('no_telp');
            $password = $request->input('password');
            $users->password = Hash::make($password);
            $users->email = $request->input('email');

            $input = $request->except('_token','password');
            $users->update($input);

            return redirect()->route('profile')->with('success','Data telah diperbarui');
        }
        else {
            return redirect()->route('edit')->with('error','Form Harus Terisi');
        }
=======
        return view('pages.user.profile');
    }

    public function editprofile(){

        return view('pages.user.editprofile');
>>>>>>> 48e8a678e2303bcfae6a64f5950a9a49c768f074
    }

    public function siswa(){

        return view('pages.user.siswa');
    }

    public function daftar1(){
<<<<<<< HEAD
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.daftar1', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function daftar2(){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.daftar2', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function daftar3(){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.daftar3', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function daftar4(){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            return view('pages.daftar4', compact('users'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
=======

        return view('pages.user.daftar1');
    }

    public function daftar2(){

        return view('pages.user.daftar2');
    }

    public function daftar3(){

        return view('pages.user.daftar3');
    }

    public function daftar4(){

        return view('pages.user.daftar4');
>>>>>>> 48e8a678e2303bcfae6a64f5950a9a49c768f074
    }

}
