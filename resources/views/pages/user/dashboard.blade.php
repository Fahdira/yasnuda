@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Dashboard')
@section('content')
    <h1 class="text-2xl font-bold mb-6">
        Dashboard
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">
                Alur Pendaftaran Online
            </h2>
            <ol class="list-decimal list-inside space-y-2">
                <li>
                    Mengisi data pendataan melalui menu Mendaftar
                </li>
                <li>
                    Kunci formulir jika sudah diisi dan nal
                </li>
                <li>
                    Melakukan pembayaran biaya pendaftaran
                </li>
                <li>
                    Menunggu pemberitahuan status pendaftaran (Diterima / Tidak)
                </li>
                <li>
                    Jika diterima maka bisa mencetak Kartu Ujian
                </li>
            </ol>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">
                Kontak Bantuan
            </h2>
            <ul class="space-y-2">
                <li>
                    Anas Ma'ruf - 08132032xxxx (MTs)
                </li>
                <li>
                    Yasep Hendra - 08231746xxxx (MTs)
                </li>
                <li>
                    Fiqri - 08122298xxxx (SMA Plus)
                </li>
                <li>
                    Andri Wicahyono - 08529509xxxx (MAN)
                </li>
                <li>
                    Nursidik - 08531449xxxx (MAN)
                </li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">
                No. Rekening Bank
            </h2>
            <p>
                Pendaftaran Santri Baru (PSB) Ponpes Darussalam Ciamis Tahun Pelajaran 2025/2026
            </p>
            <ul class="space-y-2 mt-4">
                <li>
                    MTS DARUSSALAM No BRIVA 70391102024xxxx
                </li>
                <li>
                    SMA DARUSSALAM No BRIVA 70391302024xxxx
                </li>
                <li>
                    MAN DARUSSALAM No BRIVA 70391202024xxxx
                </li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">
                Besar Biaya pendaftaran
            </h2>
            <ul class="space-y-2">
                <li>
                    1. MTS Program Peminatan: RP.250.000
                </li>
                <li>
                    2. MTs Program Kelas Khusus (mumtaz): Rp.450.000
                </li>
                <li>
                    3. MAN/SMA: Rp.250.000
                </li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">
                Siswa Terdaftar : 0
            </h2>
            <a class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded" href="{{ route('daftar1') }}">
                Daftar Sekarang
            </a>
        </div>
    </div>
@stop
