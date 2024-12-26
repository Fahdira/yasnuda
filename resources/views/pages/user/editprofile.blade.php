@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Edit Profile')
@section('content')
<!-- Profile Form -->
     <h1 class="text-2xl font-bold mb-6">
      Profile
     </h1>
     <div class="bg-white p-8 rounded shadow-md">
      <form class="grid grid-cols-2 gap-4"  method="POST" action="{{ route('update') }}">
        @csrf
       <div>
        <label class="block mb-2" for="username">
         Username
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" id="username" name="username" type="text" value="{{ $users->username }}"/>
       </div>
       <div>
        <label class="block mb-2" for="email">
         Email
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" value="{{ $users->email }}"/>
       </div>
       <div>
        <label class="block mb-2" for="phone">
         No Telp
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" id="phone" name="no_telp" type="text" value="{{ $users->no_telp }}"/>
       </div>
       <div>
        <label class="block mb-2" for="password">
         Password (Harus diganti!)
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" id="password" name="password" type="password" value="{{ $users->password }}"/>
       </div>
       <div class="col-span-2 flex justify-end mt-4">
        <a class="bg-gray-700 text-white px-4 py-2 rounded mr-2" href="{{ route('dashboard') }}">
         Kembali
        </a>
        <button class="bg-teal-500 text-white px-4 py-2 rounded" type="submit">
         Simpan Perubahan
        </button>
       </div>
      </form>
     </div>

     @if (session('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "Form harus diisi semua!",
                icon: "error",
                timer: 2000,
            });
        </script>
    @endif
@stop
