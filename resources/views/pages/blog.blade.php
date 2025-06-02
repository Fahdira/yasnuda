@extends('layouts.app')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Blog')
@section('content')
<div class="bg-gray-200">
    <div class="container mx-auto text-left py-14 px-44">
        <h1 class="text-5xl font-bold">
            Blog
        </h1>
        <p class="text-lg text-gray-600">
            Daftar blog yang tersedia
        </p>
    </div>
</div>
<div class=" p-8">
        <div class="container mx-auto mx mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 items-center">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <a href="{{ route('blog_isi', $post->slug) }}">
                        <img
                            alt="{{ $post->judul }}"
                            class="w-full"
                            src="{{ $post->getFirstMediaUrl('thumbnail', 'thumb') ?: 'https://placehold.co/300x200' }}"
                            width="300"
                            height="200"
                        />
                    </a>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            <a href="{{ route('blog_isi', $post->slug) }}" class="text-blue-600 hover:underline">
                                {{ $post->judul }}
                            </a>
                        </h2>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($post->desc, 100) }}</p>
                        <small class="text-gray-400">Published by : {{ $post->user->name }} on {{ $post->created_at }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop
