@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Siswa')
@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold mb-6">
                Data Pendaftaranmu (sedang diperiksa panitia)
            </h1>
            <div>
                <button class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded mr-2">
                    Edit Data Siswa
                </button>
                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                    Hapus Data Siswa
                </button>
            </div>
        </div>
        <div class="flex justify-center mb-8">
            <img alt="Placeholder for profile picture" class="rounded-full border-4 border-gray-300" height="150"
                src="https://storage.googleapis.com/a1aa/image/n62RAuM8JbaaDVbseQO0GmykVA3pLZ3noXXmzrm271H7xNfTA.jpg"
                width="150" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p>
                    <strong>
                        Nama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Email :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Tempat/Tanggal Lahir :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Jenis Kelamin :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        WNI/WNA :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Agama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Anak Ke :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p>
                    <strong>
                        NIK :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        NISN :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Asal Sekolah :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Keb. Khusus :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Keb. Disabilitas :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Mendaftar Ke :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Mendaftar Pesantren :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p>
                    <strong>
                        Sumber Informasi :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Infaq :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p>
                    <strong>
                        Status :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Status Pembayaran :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Data Ayah/Wali
                </p>
                <p>
                    <strong>
                        Nama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        NIK :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Jenis Kelamin :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        WNI/WNA :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Agama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Pendidikan Terakhir :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Pekerjaan :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Penghasilan :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Tempat/Tanggal Lahir :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Data Ibu
                </p>
                <p>
                    <strong>
                        Nama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        NIK :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Jenis Kelamin :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        WNI/WNA :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Agama :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Pendidikan Terakhir :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Pekerjaan :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Penghasilan :
                    </strong>
                    Lorem Ipsum
                </p>
                <p>
                    <strong>
                        Tempat/Tanggal Lahir :
                    </strong>
                    Lorem Ipsum
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Akte Kelahiran
                </p>
                <img alt="Placeholder for Akte Kelahiran" height="200"
                    src="https://storage.googleapis.com/a1aa/image/psy8LaCly7rlPlFsc2orVw56RIphZU2mO7OeTGF5AeK4jbenA.jpg"
                    width="300" />
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Kartu Keluarga
                </p>
                <img alt="Placeholder for Kartu Keluarga" height="200"
                    src="https://storage.googleapis.com/a1aa/image/vAf1iqnMV0TOHa6SMebJQaaiD3fwuW1mhxvpuzVEz6J5H38nA.jpg"
                    width="300" />
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Ijazah
                </p>
                <img alt="Placeholder for Ijazah" height="200"
                    src="https://storage.googleapis.com/a1aa/image/VIyBrVK0BkqrB9nff3ICEH3OMTiHrvZVwwST1IKe24v0H38nA.jpg"
                    width="300" />
            </div>
        </div>
    </div>
@stop
