@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Daftar')
@section('content')
<div class=" mx-auto">
    <!-- Progress Bar -->
    <div class="flex items-center justify-center mb-8">
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-teal-500 text-teal-500 font-bold text-4xl">1</div>
            <div class="w-32 h-1 bg-gray-300"></div>
        </div>
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full border-4 border-gray-300 text-gray-300 font-bold text-4xl">2</div>
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

    <!-- Form -->
    <h1 class="text-2xl font-bold mb-6">
        Daftar Siswa Baru
    </h1>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-4">Data Diri</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">NIK Siswa</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">NISN</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Asal Sekolah</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Tempat Lahir</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
                <div>
                    <label class="block text-gray-700">Tanggal Lahir</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Kewarganegaraan</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
                <div>
                    <label class="block text-gray-700">Agama</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
            </div>
            <div>
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Anak Ke</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
                <div>
                    <label class="block text-gray-700">Dari ... Bersaudara</label>
                    <input type="text" class="w-full border border-gray-300 p-2 rounded">
                </div>
            </div>
        </div>

        <h3 class="text-xl font-semibold mb-4">Informasi Tambahan</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700">Mendaftar Ke</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Mendaftar Pesantren</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Kebutuhan Khusus</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Kebutuhan Disabilitas</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Sumber Informasi</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Infaq</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
        </div>

        <div class="flex justify-end space-x-4">
            <a class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded" href="{{ route('daftar2') }}">Selanjutnya</a>
        </div>
    </div>
</div>
@stop
