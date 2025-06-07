@extends('layouts.auth')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Login')
@section('content')
    <div class="max-w-4xl mx-auto my-auto">
        <h1 class="text-4xl font-light mb-8">Selamat Datang!</h1>
        <div class="border border-gray-300 p-8 flex flex-col md:flex-row items-center justify-between md:items-start">
            <div class="md:w-1/2 md:pr-8">
                <h2 class="text-xl font-bold mb-4">Login Akun Pendaftaran</h2>
                <form class="space-y-6" action="{{ route('postLogin') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="email" placeholder="Email" name="email" id="email" autocomplete="email" required class="block w-full rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    <div class="mb-4">
                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="w-full p-2 bg-teal-500 hover:bg-teal-600 text-white rounded">Masuk</button>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900 block">Daftar Akun Baru</a>
                    </div>
                </form>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <div class="w-full h-64 flex items-center justify-center">
                    <img class="mx-auto h-64 w-auto" src="{{ asset('images/logo/logo.png') }}">
                </div>
            </div>
        </div>
        <div class="fixed bottom-4 right-4">
            <a class="w-12 h-12 bg-[#25D366] text-white rounded-full flex items-center justify-center" href="https://wa.link/21ittc">
                <i class="fab fa-whatsapp text-2xl"></i>
            </a>
        </div>
    </div>

    @if (session('message'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "Akun telah dibuat, silahkan login.",
                icon: "success",
                timer: 2000,
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "Email atau Password Salah.",
                icon: "error",
                timer: 2000,
            });
        </script>
    @endif

    @if (session('session'))
        <script>
            Swal.fire({
                title: "Session Expired!",
                text: "Session telah habis silahkan login kembali.",
                icon: "error",
                timer: 2000,
            });
        </script>
    @endif

    @if (session('logout'))
        <script>
            Swal.fire({
                title: "Berhasil Logout",
                icon: "success",
                timer: 2000,
            });
        </script>
    @endif
@stop
