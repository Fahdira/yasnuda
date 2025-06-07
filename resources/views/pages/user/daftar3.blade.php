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
        <div class="flex-1 border-t-2 border-gray-300 mx-2"></div>
        <div class="flex items-center text-gray-300">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-gray-300">4</div>
        </div>
    </div>

    <!-- Form Title -->
    <h1 class="text-2xl font-semibold mb-6">
        Daftar Siswa Baru
    </h1>
    <form action="{{ route('store3') }}" method="POST" id="third-form" enctype="multipart/form-data">
        @csrf
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Data Orang Tua/Wali</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div>
                    <label class="block mb-2">Nama Lengkap Ayah/Wali</label>
                    <input type="text" name="nama_ayah" class="w-full p-2 border border-gray-300 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Nama Lengkap Wali Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">NIK Wali</label>
                    <input type="number" name="NIK_ayah" class="w-full p-2 border border-gray-300 rounded">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan NIK Wali Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ayah" class="w-full p-2 border border-gray-300 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Pekerjaan Wali Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">Pendidikan Terakhir</label>
                    <select id="pendidikan" name="pendidikan_ayah" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>SD/MI</option>
                        <option>SMP/SLTP Sederajat</option>
                        <option>SMA/SLTA Sederajat</option>
                        <option>D3</option>
                        <option>D4</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Riwayat Pendidikan Wali Calon Siswa</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Status</label>
                        <select id="status" name="status_ayah" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>MASIH HIDUP</option>
                            <option>MENINGGAL</option>
                            <option>LAINNYA</option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Status Wali Calon Siswa saat ini</p>
                    </div>
                    <div>
                        <label class="block mb-2">Penghasilan</label>
                        <select id="penghasilan" name="penghasilan_ayah" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>< 500.000</option>
                            <option>500.000 - 1.000.000</option>
                            <option>1.000.000 - 5.000.000</option>
                            <option>5.000.000 - 10.000.000</option>
                            <option>10.000.000 ></option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Penghasilan Wali Calon Siswa</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Kewarganegaraan</label>
                        <select id="warga" name="warga_ayah" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>WNI</option>
                            <option>WNA</option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Kewarganegaraan Wali Calon Siswa</p>
                    </div>
                    <div>
                        <label class="block mb-2">Agama</label>
                        <input type="text" name="agama_ayah" class="w-full p-2 border border-gray-300 rounded uppercase">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Status Agama Wali Calon Siswa</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Tempat Lahir</label>
                        <input type="text" name="tmp_lhr_ayah" class="w-full p-2 border border-gray-300 rounded uppercase">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Tempat Lahir Wali Calon Siswa</p>
                    </div>
                    <div>
                        <label class="block mb-2">Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr_ayah" class="w-full p-2 border border-gray-300 rounded">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Tanggal Lahir Wali Calon Siswa</p>
                    </div>
                </div>
                <div>
                    <label class="block mb-2">Upload KTP Wali</label>
                    <div class="flex items-center justify-center w-full h-11 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="ktp_ayah" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File KTP Wali Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
            </div>
            <h2 class="text-xl font-semibold mb-4">Data Diri Ibu</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div>
                    <label class="block mb-2">Nama Lengkap Ibu</label>
                    <input type="text" name="nama_ibu" class="w-full p-2 border border-gray-300 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Nama Lengkap Ibu Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">NIK Ibu</label>
                    <input type="number" name="NIK_ibu" class="w-full p-2 border border-gray-300 rounded">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan NIK Ibu Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ibu" class="w-full p-2 border border-gray-300 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Pekerjaan Ibu Calon Siswa</p>
                </div>
                <div>
                    <label class="block mb-2">Pendidikan Terakhir</label>
                    <select id="pendidikan" name="pendidikan_ibu" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>SD/MI</option>
                        <option>SMP/SLTP Sederajat</option>
                        <option>SMA/SLTA Sederajat</option>
                        <option>D3</option>
                        <option>D4</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Riwayat Pendidikan Ibu Calon Siswa</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Status</label>
                        <select id="status" name="status_ibu" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>MASIH HIDUP</option>
                            <option>MENINGGAL</option>
                            <option>LAINNYA</option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Status Ibu Calon Siswa saat ini</p>
                    </div>
                    <div>
                        <label class="block mb-2">Penghasilan</label>
                        <select id="penghasilan" name="penghasilan_ibu" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>< 500.000</option>
                            <option>500.000 - 1.000.000</option>
                            <option>1.000.000 - 5.000.000</option>
                            <option>5.000.000 - 10.000.000</option>
                            <option>10.000.000 ></option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Penghasilan Ibu Calon Siswa</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Kewarganegaraan</label>
                        <select id="warga" name="warga_ibu" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option>WNI</option>
                            <option>WNA</option>
                        </select>
                        <p class="mt-1 text-sm/6 text-gray-400">Pilih Kewarganegaraan Ibu Calon Siswa</p>
                    </div>
                    <div>
                        <label class="block mb-2">Agama</label>
                        <input type="text" name="agama_ibu" class="w-full p-2 border border-gray-300 rounded uppercase">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Status Agama Ibu Calon Siswa</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2">Tempat Lahir</label>
                        <input type="text" name="tmp_lhr_ibu" class="w-full p-2 border border-gray-300 rounded uppercase">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Tempat Lahir Ibu Calon Siswa</p>
                    </div>
                    <div>
                        <label class="block mb-2">Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr_ibu" class="w-full p-2 border border-gray-300 rounded">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Tanggal Lahir Ibu Calon Siswa</p>
                    </div>
                </div>
                <div>
                    <label class="block mb-2">Upload KTP Ibu</label>
                    <div class="flex items-center justify-center w-full h-11 border border-gray-300 rounded">
                        <i class="fas fa-upload text-gray-400 mx-2"></i>
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-teal-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-teal-600">
                            <input class="w-full file:bg-teal-500 file:text-white file:border-0 file:rounded" id="file-upload" name="ktp_ibu" type="file">
                        </label>
                    </div>
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan Upload File KTP Ibu Calon Siswa *Format didukung : PDF, JPG, PNG, JPEG Maks 10 MB</p>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <a class="bg-gray-400 text-white px-4 py-2 rounded" href="#" id="back-btn">Kembali Ke Beranda</a>
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="#" id="third-btn">Selanjutnya</a>
            </div>
            <form method="GET" id="back-form" action="{{ route('dashboard') }}" style="display:none;"></form>
        </div>
    </form>

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
