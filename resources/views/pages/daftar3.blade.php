@extends('layouts.user')
@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-center mb-8">
        <div class="flex items-center space-x-4">
            <div class="flex items-center justify-center w-10 h-10 bg-white border-2 border-teal-500 rounded-full text-teal-500">1</div>
            <div class="w-16 h-1 bg-teal-500"></div>
            <div class="flex items-center justify-center w-10 h-10 bg-white border-2 border-teal-500 rounded-full text-teal-500">2</div>
            <div class="w-16 h-1 bg-teal-500"></div>
            <div class="flex items-center justify-center w-10 h-10 bg-white border-2 border-teal-500 rounded-full text-teal-500">3</div>
            <div class="w-16 h-1 bg-gray-300"></div>
            <div class="flex items-center justify-center w-10 h-10 bg-white border-2 border-gray-300 rounded-full text-gray-300">4</div>
        </div>
    </div>
    <h1 class="text-2xl font-semibold mb-4">Daftar Siswa Baru</h1>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Data Orang Tua/Wali</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div>
                <label class="block mb-2">Nama Lengkap Ayah/Wali</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">NIK Ayah/Wali</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Pekerjaan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Pendidikan Terakhir</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Status</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Penghasilan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Kewarganegaraan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Agama</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Tempat Lahir</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Tanggal Lahir</label>
                <input type="date" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Upload KTP Ayah</label>
                <div class="flex items-center justify-center w-full h-12 border border-gray-300 rounded">
                    <i class="fas fa-upload text-gray-400"></i>
                </div>
            </div>
        </div>
        <h2 class="text-xl font-semibold mb-4">Data Diri Ibu</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div>
                <label class="block mb-2">Nama Lengkap Ibu</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">NIK Ibu</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Pekerjaan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Pendidikan Terakhir</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Status</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Penghasilan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Kewarganegaraan</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Agama</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Tempat Lahir</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Tanggal Lahir</label>
                <input type="date" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block mb-2">Upload KTP Ibu</label>
                <div class="flex items-center justify-center w-full h-12 border border-gray-300 rounded">
                    <i class="fas fa-upload text-gray-400"></i>
                </div>
            </div>
        </div>
        <div class="flex justify-end space-x-4">
            <a class="px-4 py-2 bg-gray-500 text-white rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="px-4 py-2 bg-gray-300 text-gray-700 rounded" href="{{ route('daftar2') }}">Kembali Ke Tahap Sebelumnya</a>
            <a class="px-4 py-2 bg-teal-500 text-white rounded" href="{{ route('daftar4') }}">Selanjutnya</a>
        </div>
    </div>
</div>
@stop
