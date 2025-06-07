@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Daftar')
@section('content')
<div class="container mx-auto">
    <!-- Progress Bar -->
    <div class="flex items-center mb-8">
        <div class="flex items-center text-teal-500">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-teal-500">1</div>
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
    <h2 class="text-2xl font-semibold mb-6">Daftar Siswa Baru</h2>
    <form action="{{ route('store1') }}" method="POST" id="first-form">
        @csrf
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Data Diri</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Nama Lengkap Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">NIK</label>
                    <input type="number" name="NIK_siswa" class="w-full border border-gray-300 p-2 rounded">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan No NIK Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">NISN</label>
                    <input type="number" name="NISN" class="w-full border border-gray-300 p-2 rounded">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan No NISN Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Asal Sekolah</label>
                    <input type="text" name="asal_sklh" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Asal Sekolah Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Tempat Lahir</label>
                    <input type="text" name="tmp_lhr" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Kota/Kab Tempat Lahir Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tgl_lhr" class="w-full border border-gray-300 p-2 rounded">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan Tanggal Kelahiran Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Kewarganegaraan</label>
                    <select id="warga" name="warga" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>WNI</option>
                        <option>WNA</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih status kewarganegaraan Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Agama</label>
                    <input type="text" name="agama" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Masukkan status Agama Calon Siswa</p>
                </div>
                <div>
                    <label class="block text-gray-700">Jenis Kelamin</label>
                    <select id="jenis" name="jenis" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>LAKI-LAKI</option>
                        <option>PEREMPUAN</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Jenis Kelamin Calon Siswa</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Anak Ke</label>
                        <input type="number" name="anak_ke" class="w-full border border-gray-300 p-2 rounded">
                        <p class="mt-1 text-sm/6 text-gray-400">Masukkan Status anak ke berapa Calon Siswa</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">Dari berapa Bersaudara</label>
                        <input type="number" name="dari_br" class="w-full border border-gray-300 p-2 rounded">
                        <p class="mt-1 text-sm/6 text-gray-400">Dari Berapa Bersaudara</p>
                    </div>
                </div>
                </div>


            <h3 class="text-xl font-semibold mb-4">Informasi Tambahan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-gray-700">Mendaftar Ke</label>
                    <select id="daftar_ke" name="daftar_ke" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>MDTA NUURUL HUDAA</option>
                        <option>MTs NUURUL HUDAA</option>
                        <option>MA NUURUL HUDAA</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih Program yang Calon Siswa akan daftar</p>
                </div>
                <div>
                    <label class="block text-gray-700">Mendaftar Pesantren</label>
                    <select id="daftar_pes" name="daftar_pes" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>YA</option>
                        <option>TIDAK</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih 'Ya' jika Calon Siswa akan mendaftar Pesantren</p>
                </div>
                <div>
                    <label class="block text-gray-700">Kebutuhan Khusus</label>
                    <input type="text" name="keb_khusus" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Isi bila Calon Siswa memiliki kebutuhan Khusus, dapat dikosongkan</p>
                </div>
                <div>
                    <label class="block text-gray-700">Kebutuhan Disabilitas</label>
                    <input type="text" name="keb_dis" class="w-full border border-gray-300 p-2 rounded uppercase">
                    <p class="mt-1 text-sm/6 text-gray-400">Isi bila Calon Siswa memiliki kebutuhan Disabilitas, dapat dikosongkan</p>
                </div>
                <div>
                    <label class="block text-gray-700">Sumber Informasi</label>
                    <select id="sumber" name="sumber" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <option>KELUARGA</option>
                        <option>TEMAN</option>
                        <option>KENALAN</option>
                        <option>LAINNYA</option>
                    </select>
                    <p class="mt-1 text-sm/6 text-gray-400">Pilih dari siapa Calon Siswa mengetahui lembaga ini</p>
                </div>
                <div>
                    <label class="block text-gray-700">Infaq</label>
                    <input type="number" name="infaq" class="w-full border border-gray-300 p-2 rounded" placeholder="Contoh : 100000">
                    <p class="mt-1 text-sm/6 text-gray-400">Silahkan diisi dengan jumlah infaq yang ingin diberikan</p>
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <a class="bg-gray-400 text-white px-4 py-2 rounded" href="#" id="back-btn">Kembali Ke Beranda</a>
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="#" id="first-btn">Selanjutnya</a>
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
                text: "Mohon isi semua form sebelum melanjutkan",
                icon: "error",
                timer: 3000,
            });
        </script>
    @endif
@stop
