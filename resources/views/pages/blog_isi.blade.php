@extends('layouts.app')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Blog')
@section('content')

<div class="bg-gray-200">
    <div class="container mx-auto text-left py-28 px-44">
        <h1 class="text-5xl font-bold">
            {{ $post->judul }}
        </h1>
        <p class="text-lg text-gray-600">
            blog/{{ \Illuminate\Support\Str::limit($post->slug, 100) }}
        </p>
    </div>
</div>

<div class="container mx-auto">
    <div class="bg-white p-8 mx-auto">
        <div class="max-w-[600px] mx-auto">
            <!-- Image Section -->
            <div class="flex justify-center mb-8">
                <img alt="Thumbnail image" class="rounded-lg"
                    src="{{ $post->getFirstMediaUrl('thumbnail', 'thumb') ?: 'https://placehold.co/300x200' }}"
                    width="600" />
            </div>
            <!-- Text Section -->
            <h2 class="text-2xl font-bold mb-4">
                {{ $post->judul }}
            </h2>
            <p class="text-gray-700 mb-4">
                {{ \Illuminate\Support\Str::limit($post->desc, 100) }}
            </p>
            <p class="text-gray-600 mb-2">
                Ditulis Oleh : {{ $post->user->name }}
            </p>
            <p class="text-gray-600">
                {{ $post->created_at }}
            </p>
        </div>
    </div>
</div>

@stop
