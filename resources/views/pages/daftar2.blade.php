@extends('layouts.user')
@section('content')
<div class="max-w-4xl mx-auto p-6">
    <!-- Progress Bar -->
    <div class="flex items-center justify-center mb-8">
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">1</div>
            <div class="w-32 h-1 bg-teal-500"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">2</div>
            <div class="w-32 h-1 bg-gray-300"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-gray-300 text-gray-300 font-bold text-4xl">3</div>
            <div class="w-32 h-1 bg-gray-300"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-gray-300 text-gray-300 font-bold text-4xl">4</div>
        </div>
    </div>

    <!-- Form Title -->
    <h1 class="text-2xl font-bold mb-6">Daftar Siswa Baru</h1>

    <!-- Form Container -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Detail Alamat</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" class="w-full p-2 border border-gray-300 rounded-md" rows="4"></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 mb-2" for="provinsi">Provinsi</label>
                    <input id="provinsi" type="text" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2" for="kabupaten">Kabupaten / Kota</label>
                    <input id="kabupaten" type="text" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 mb-2" for="kecamatan">Kecamatan</label>
                    <input id="kecamatan" type="text" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2" for="desa">Desa</label>
                    <input id="desa" type="text" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
            </div>
            <div class="flex justify-between">
                <a type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
                <a type="button" class="bg-gray-700 text-white px-4 py-2 rounded-md" href="{{ route('daftar1') }}">Kembali Ke Tahap Sebelumnya</a>
                <a type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md" href="{{ route('daftar3') }}">Selanjutnya</a>
            </div>
        </form>
    </div>
</div>
@stop
