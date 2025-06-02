@extends('layouts.app')
@section('content')
<div class="py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Yayasan Nuurul Hudaa Al-Isma'iliyyah</h1>
        <p class="text-gray-600 mb-8">Selamat datang di official  website Yasnuda, Daftar secara online dengan klik tombol dibawah</p>
        <a class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded" href="{{ route('register') }}">Daftar Online</a>
    </div>
    <div class=" p-8">
        <div class="container mx-auto mx mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 items-center">
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
    </div>
    <div class="container mx-auto mt-16">
        <h2 class="text-2xl font-semibold text-center mb-8">Peta Lokasi</h2>
        <div class="flex justify-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.944398653029!2d107.63497627481875!3d-6.89725396749632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7bb3ecbe445%3A0xc603604dc4fa418!2sITENAS%20GD%202!5e0!3m2!1sen!2sid!4v1748445627908!5m2!1sen!2sid"
                width="1460"
                height="600"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
</div>
@stop
