<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function dashboard(){

        return view('pages.dashboard');
    }

    public function profile(){

        return view('pages.profile');
    }

    public function editprofile(){

        return view('pages.editprofile');
    }

    public function siswa(){

        return view('pages.siswa');
    }

    public function daftar1(){

        return view('pages.daftar1');
    }

    public function daftar2(){

        return view('pages.daftar2');
    }

    public function daftar3(){

        return view('pages.daftar3');
    }

    public function daftar4(){

        return view('pages.daftar4');
    }

}
