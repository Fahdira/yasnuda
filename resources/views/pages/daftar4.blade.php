@extends('layouts.user')
@section('content')
<div class="container mx-auto p-4">
    <!-- Progress Steps -->
    <div class="flex justify-center mb-8">
        <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white border-2 border-teal-500 text-teal-500">1</div>
            <div class="w-24 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white border-2 border-teal-500 text-teal-500">2</div>
            <div class="w-24 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white border-2 border-teal-500 text-teal-500">3</div>
            <div class="w-24 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white border-2 border-teal-500 text-teal-500">4</div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Daftar Siswa Baru</h2>
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
            <a class="bg-gray-500 text-white px-4 py-2 rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="bg-gray-700 text-white px-4 py-2 rounded" href="{{ route('daftar3') }}">Kembali Ke Tahap Sebelumnya</a>
            <a class="bg-teal-500 text-white px-4 py-2 rounded" href="{{ route('siswa') }}">Simpan Data Siswa</a>
        </div>
    </div>
</div>
@stop
