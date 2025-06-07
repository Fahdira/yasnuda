@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Daftar')
@section('content')
<div class="container mx-auto">
    <!-- Progress Bar -->
    <div class="flex items-center mb-8">
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">1</div>
        </div>
        <div class="flex-1 border-t-2 border-teal-500 mx-2"></div>
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">2</div>
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

    <!-- Form Title -->
    <h1 class="text-2xl font-semibold mb-6">
        Daftar Siswa Baru
    </h1>

    <!-- Form Container -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Detail Alamat</h2>
        <form method="POST" action="{{ route('store2') }}" id="second-form">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" class="w-full p-2 border border-gray-300 rounded-md uppercase" rows="4"></textarea>
                <p class="mt-1 text-sm/6 text-gray-400">Masukkan alamat lengkap Contoh : Jln. Cipadang Km.12 Kp. Lampegan, RT 04/12</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 mb-2" for="provinsi">Provinsi</label>
                    <input id="provinsi" name="provinsi" type="text" class="w-full p-2 border border-gray-300 rounded-md uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Provinsi</p>
                </div>
                <div>
                    <label class="block text-gray-700 mb-2" for="kabupaten">Kabupaten / Kota</label>
                    <input id="kabupaten" name="kabupaten/kota" type="text" class="w-full p-2 border border-gray-300 rounded-md uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Kabupaten/Kota</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 mb-2" for="kecamatan">Kecamatan</label>
                    <input id="kecamatan" name="kecamatan" type="text" class="w-full p-2 border border-gray-300 rounded-md uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Kecamatan</p>
                </div>
                <div>
                    <label class="block text-gray-700 mb-2" for="desa">Desa</label>
                    <input id="desa" name="desa" type="text" class="w-full p-2 border border-gray-300 rounded-md uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Desa</p>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <a class="bg-gray-400 text-white px-4 py-2 rounded" href="#" id="back-btn">Kembali Ke Beranda</a>
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="#" id="second-btn">Selanjutnya</a>
            </div>
        </form>
        <form method="GET" id="back-form" action="{{ route('dashboard') }}" style="display:none;"></form>
    </div>
</div>

    @if ($errors->any())
        <script>
            Swal.fire({
                title: "Gagal Menyimpan!",
                text: "Mohon isi semua form sebelum melanjutkan",
                icon: "error",
                timer: 3000,
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: "Gagal Menyimpan!",
                text: "Mohon isi semua form sebelum melanjutkan",
                icon: "error",
                timer: 3000,
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                title: "Data Berhasil disimpan",
                icon: "success",
            });
        </script>
    @endif
@stop
