<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

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

        return view('pages.user.dashboard');
    }

    public function profile(){

        return view('pages.user.profile');
    }

    public function editprofile(){

        return view('pages.user.editprofile');
    }

    public function siswa(){

        return view('pages.user.siswa');
    }

    public function daftar1(){

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
    }

}
