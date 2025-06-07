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
        <div class="flex-1 border-t-2 border-teal-500 mx-2"></div>
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">3</div>
        </div>
        <div class="flex-1 border-t-2 border-teal-500 mx-2"></div>
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">4</div>
        </div>
    </div>

    <!-- Form Title -->
    <h1 class="text-2xl font-semibold mb-6">
        Daftar Siswa Baru
    </h1>

    <!-- Form Section -->
    <form action="{{ route('store4') }}" method="POST" id="forth-form" enctype="multipart/form-data">
        @csrf
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Upload Data Siswa</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block mb-2">Upload Akta Kelahiran</label>
                    <div class="flex items-center justify-center w-full h-20 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="akta" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File Akta Kelahiran Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
                <div>
                    <label class="block mb-2">Upload Kartu Keluarga</label>
                    <div class="flex items-center justify-center w-full h-20 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="kk" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File Kartu Keluarga Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
                <div>
                    <label class="block mb-2">Upload Ijasah Terakhir</label>
                    <div class="flex items-center justify-center w-full h-20 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="ijasah" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File Ijasah Terakhir Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
                <div>
                    <label class="block mb-2">Upload Pas Foto (3x4)</label>
                    <div class="flex items-center justify-center w-full h-20 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="pas_foto" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File Pas Foto ukuran 3x4 Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <a class="bg-gray-400 text-white px-4 py-2 rounded" href="#" id="back-btn">Kembali Ke Beranda</a>
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="#" id="forth-btn">Simpan dan Kunci</a>
            </div>
        </div>
    </form>
    <form method="GET" id="back-form" action="{{ route('dashboard') }}" style="display:none;"></form>
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
                text: "Mohon upload semua file sebelum melanjutkan",
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
