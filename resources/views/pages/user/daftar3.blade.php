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
            <div class="w-32 h-1 bg-gray-300"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-gray-300 text-gray-300 font-bold text-4xl">4</div>
        </div>
    </div>

    <!-- Form Title -->
    <h1 class="text-2xl font-bold mb-6">
        Daftar Siswa Baru
    </h1>

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
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Status</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Penghasilan</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Kewarganegaraan</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Agama</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Tempat Lahir</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Tanggal Lahir</label>
                    <input type="date" class="w-full p-2 border border-gray-300 rounded">
                </div>
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
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Status</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Penghasilan</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Kewarganegaraan</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Agama</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2">Tempat Lahir</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div>
                    <label class="block mb-2">Tanggal Lahir</label>
                    <input type="date" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div>
                <label class="block mb-2">Upload KTP Ibu</label>
                <div class="flex items-center justify-center w-full h-12 border border-gray-300 rounded">
                    <i class="fas fa-upload text-gray-400"></i>
                </div>
            </div>
        </div>
        <div class="flex justify-end space-x-4">
            <a class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded" href="{{ route('daftar2') }}">Kembali Ke Tahap Sebelumnya</a>
            <a class="px-4 py-2 bg-teal-500 hover:bg-teal-600 text-white rounded" href="{{ route('daftar4') }}">Selanjutnya</a>
        </div>
    </div>
</div>
@stop
