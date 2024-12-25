@extends('layouts.app')
@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Yayasan Nuurul Hudaa Al-Isma'iliyyah</h1>
        <p class="text-gray-600 mb-8">Selamat datang di official  website Yasnuda, Daftar secara online dengan klik tombol dibawah</p>
        <a class="bg-teal-600 text-white px-6 py-3 rounded" href="{{ route('register') }}">Daftar Online</a>
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
    <div class="bg-white py-8 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-start space-x-4">
                <i class="fas fa-map-marker-alt text-2xl text-teal-600"></i>
                <div>
                    <h3 class="text-lg font-semibold">Location</h3>
                    <p>Jln. Cipadang Km.12 Kp. Lampegan, Cibokor, Kec. Cibeber, Kabupaten Cianjur, Jawa Barat 43262</p>
                    <p>No. Telepon : 085722221614</p>
                    <p>Email : yasnuda@gmail.com</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <i class="fab fa-facebook text-2xl text-teal-600"></i>
                <div>
                    <h3 class="text-lg font-semibold">Facebook</h3>
                    <img alt="Facebook Feed" class="w-full" height="200" src="https://placehold.co/300x200" width="300"/>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <i class="fab fa-instagram text-2xl text-teal-600"></i>
                <div>
                    <h3 class="text-lg font-semibold">Instagram</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <img alt="Instagram Image 1" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 2" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 3" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 4" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 5" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 6" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 7" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 8" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                        <img alt="Instagram Image 9" class="w-full" height="100" src="https://placehold.co/100x100" width="100"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
