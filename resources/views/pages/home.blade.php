@extends('layouts.app')
@section('content')
<div class="py-16 px-6">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Yayasan Nuurul Hudaa Al-Isma'iliyyah</h1>
        <p class="text-gray-600 mb-8">Selamat datang di official  website Yasnuda, Daftar secara online dengan klik tombol dibawah</p>
        <a class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded" href="{{ route('register') }}">Daftar Online</a>
    </div>
    <div class="container mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img
                    alt="{{ $post->judul }}"
                    class="w-full"
                    src="{{ $post->getFirstMediaUrl('thumbnail', 'thumb') ?: 'https://placehold.co/300x200' }}"
                    width="300"
                    height="200"
                />
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">{{ $post->judul }}</h2>
                    <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($post->desc, 100) }}</p>
                    <small class="text-gray-400">Published by : {{ $post->user->name }} on {{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container mx-auto mt-16">
        <h2 class="text-2xl font-semibold text-center mb-8">Peta Lokasi</h2>
        <iframe class="w-full" src="https://maps.app.goo.gl/GGg4HBuky9ePYpHf8" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@stop
