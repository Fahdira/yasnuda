@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Profile')
@section('content')
<!-- Profile Form -->
     <h1 class="text-2xl font-bold mb-6">
      Profile
     </h1>
     <div class="bg-white p-8 rounded shadow-md">
      <form class="grid grid-cols-2 gap-4">
       <div>
        <label class="block mb-2" for="username">
         Username
        </label>
        <input disabled class="w-full p-2 border border-gray-300 rounded" id="username" type="text" value="{{ $users->username }}"/>
       </div>
       <div>
        <label class="block mb-2" for="email">
         Email
        </label>
        <input disabled class="w-full p-2 border border-gray-300 rounded" id="email" type="email" value="{{ $users->email }}"/>
       </div>
       <div>
        <label class="block mb-2" for="phone">
         No Telp
        </label>
        <input disabled class="w-full p-2 border border-gray-300 rounded" id="phone" type="text" value="{{ $users->no_telp }}"/>
       </div>
       <div>
        <label class="block mb-2" for="password">
         Password
        </label>
        <input disabled class="w-full p-2 border border-gray-300 rounded" id="password" type="password" value=""/>
       </div>
       <div class="col-span-2 flex justify-end mt-4">
        <a class="bg-gray-700 text-white px-4 py-2 rounded mr-2" href="{{ route('dashboard') }}">
         Kembali
        </a>
        <a class="bg-teal-500 text-white px-4 py-2 rounded" href="#" id="edit-profile">Edit Profile</a>
       </div>
      </form>
      <form method="GET" id="edit-form" action="{{ route('edit') }}" style="display:none;"></form>
     </div>

     @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "Berhasil Memperbarui Profile.",
                icon: "success",
                timer: 2000,
            });
        </script>
    @endif
@stop
