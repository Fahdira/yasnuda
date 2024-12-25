@extends('layouts.user')
@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Progress Bar -->
    <div class="flex items-center mb-8">
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">1</div>
            <div class="ml-2">Daftar Siswa Baru</div>
        </div>
        <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
        <div class="flex items-center text-gray-300">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-300">2</div>
        </div>
        <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
        <div class="flex items-center text-gray-300">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-300">3</div>
        </div>
        <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
        <div class="flex items-center text-gray-300">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-300">4</div>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Daftar Siswa Baru</h2>

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
            <div>
                <label class="block text-gray-700">Tempat Lahir</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Tanggal Lahir</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Kewarganegaraan</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Agama</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Anak Ke</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700">Dari ... Bersaudara</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded">
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
            <a class="bg-gray-400 text-white px-4 py-2 rounded" href="{{ route('dashboard') }}">Simpan & Kembali Ke Beranda</a>
            <a class="bg-teal-500 text-white px-4 py-2 rounded" href="{{ route('daftar2') }}">Selanjutnya</a>
        </div>
    </div>
</div>
@stop
