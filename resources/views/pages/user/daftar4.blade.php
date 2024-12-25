@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Daftar')
@section('content')
<div class="container mx-auto">
    <!-- Progress Bar -->
    <div class="flex items-center justify-center mb-8">
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">1</div>
            <div class="w-32 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">2</div>
            <div class="w-32 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">3</div>
            <div class="w-32 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">4</div>
        </div>
    </div>

    <!-- Form Title -->
    <h1 class="text-2xl font-bold mb-6">
        Daftar Siswa Baru
    </h1>

    <!-- Form Section -->
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-4">Upload Data Siswa</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700 mb-2">Upload File Akta Lahir Siswa</label>
                <div class="border-2 border-gray-300 border-dashed rounded-lg p-4 flex items-center justify-center">
                    <i class="fas fa-upload text-gray-400 text-2xl"></i>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Upload Pas Foto Siswa</label>
                <div class="border-2 border-gray-300 border-dashed rounded-lg p-4 flex items-center justify-center">
                    <i class="fas fa-upload text-gray-400 text-2xl"></i>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Upload File Kartu Keluarga Siswa</label>
                <div class="border-2 border-gray-300 border-dashed rounded-lg p-4 flex items-center justify-center">
                    <i class="fas fa-upload text-gray-400 text-2xl"></i>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Upload Ijasah Siswa</label>
                <div class="border-2 border-gray-300 border-dashed rounded-lg p-4 flex items-center justify-center">
                    <i class="fas fa-upload text-gray-400 text-2xl"></i>
                </div>
            </div>
        </div>
        <div class="flex justify-end space-x-4">
            <a class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded" href="{{ route('daftar3') }}">Kembali Ke Tahap Sebelumnya</a>
            <a class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded" href="{{ route('siswa') }}">Simpan Data Siswa</a>
        </div>
    </div>
</div>
@stop
