@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Edit Profile')
@section('content')
    <!-- Profile Form -->
    <h1 class="text-2xl font-bold mb-6">
        Edit Profile
    </h1>
    <div class="bg-white p-8 rounded shadow-md">
        <form class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-2" for="username">
                    Username
                </label>
                <input class="w-full p-2 border border-gray-300 rounded" id="username" type="text" />
            </div>
            <div>
                <label class="block mb-2" for="email">
                    Email
                </label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" type="email" />
            </div>
            <div>
                <label class="block mb-2" for="phone">
                    No Telp
                </label>
                <div class="flex items-center">
                    <span class="block w-auto p-2 border border-gray-300 rounded mr-2">
                        +62
                    </span>
                    <input class="w-full p-2 border border-gray-300 rounded" id="phone" type="text" />
                </div>
            </div>
            <div>
                <label class="block mb-2" for="password">
                    Password
                </label>
                <input class="w-full p-2 border border-gray-300 rounded" id="password" type="password" />
            </div>
            <div class="col-span-2 flex justify-end mt-4">
                <a class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded mr-2" type="button"
                    href="{{ route('profile') }}">
                    Kembali
                </a>
                <a class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded" type="submit"
                    href="{{ route('profile') }}">
                    Simpan Profile
                </a>
            </div>
        </form>
    </div>
@stop
