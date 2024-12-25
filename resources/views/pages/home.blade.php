@extends('layouts.app')
@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Website Pendaftaran</h1>
        <p class="text-gray-600 mb-8">Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
        <a class="bg-teal-600 text-white px-6 py-3 rounded" href="{{ route('register') }}">Daftar Online</a>
    </div>
    <div class="container mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Image 1" class="w-full" height="200" src="https://placehold.co/300x200" width="300"/>
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Judul</h2>
                <p class="text-gray-600">Eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Image 2" class="w-full" height="200" src="https://placehold.co/300x200" width="300"/>
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Judul</h2>
                <p class="text-gray-600">Eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Image 3" class="w-full" height="200" src="https://placehold.co/300x200" width="300"/>
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Judul</h2>
                <p class="text-gray-600">Eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-16">
        <h2 class="text-2xl font-semibold text-center mb-8">Peta Lokasi</h2>
        <img alt="Map" class="w-full" height="400" src="https://placehold.co/800x400" width="800"/>
    </div>
    <div class="bg-white py-8 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-start space-x-4">
                <i class="fas fa-map-marker-alt text-2xl text-teal-600"></i>
                <div>
                    <h3 class="text-lg font-semibold">Location</h3>
                    <p>Jl. A.H. Nasution Jl. Jamaras III, Jatihandap, Kec. Mandalajati, Kota Bandung, Jawa Barat 40195</p>
                    <p>No. Telepon : 000000</p>
                    <p>Email : example.email@gmail.com</p>
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
