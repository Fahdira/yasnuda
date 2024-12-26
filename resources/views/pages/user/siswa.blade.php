@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Siswa')
@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold mb-6">
                Data Pendaftaranmu : {{ $person->status }}
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
            <img alt="Placeholder for profile picture" class="rounded-full border-4 border-gray-300" height="200" src="{{ asset('global/data/Foto/' . $file->pas_foto) }}" width="200" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded shadow">
                <p class="my-1">
                    <strong>Nama : </strong>
                    {{ $person->nama }}
                </p>
                <p class="my-2">
                    <strong>Email : </strong>
                    {{ $users->email }}
                </p>
                <p class="my-2">
                    <strong>Tempat/Tanggal Lahir : </strong>
                    {{ $person->tmp_lhr }} , {{ \Carbon\Carbon::parse($person->tgl_lhr)->format('d M Y') }}
                </p>
                <p class="my-2">
                    <strong>Jenis Kelamin : </strong>
                    {{ $person->jenis }}
                </p>
                <p class="my-2">
                    <strong>WNI/WNA : </strong>
                    {{ $person->warga }}
                </p>
                <p class="my-2">
                    <strong>Agama : </strong>
                    {{ $person->agama }}
                </p>
                <p class="my-2">
                    <strong>Anak Ke : </strong>
                    {{ $person->anak_ke }}
                    <text>Dari</text>
                    {{ $person->dari_br }}
                    <text>Bersaudara</text>
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="my-2">
                    <strong>NIK : </strong>
                    {{ $person->NIK_siswa }}
                </p>
                <p class="my-2">
                    <strong>NISN : </strong>
                    {{ $person->NISN }}
                </p>
                <p class="my-2">
                    <strong>Asal Sekolah : </strong>
                    {{ $person->asal_sklh }}
                </p>
                <p class="my-2">
                    <strong>Keb. Khusus : </strong>
                    {{ $person->keb_khusus }}
                </p>
                <p class="my-2">
                    <strong>Keb. Disabilitas : </strong>
                    {{ $person->keb_dis }}
                </p>
                <p class="my-2">
                    <strong>Mendaftar Ke : </strong>
                    {{ $person->daftar_ke }}
                </p>
                <p class="my-2">
                    <strong>Mendaftar Pesantren : </strong>
                    {{ $person->daftar_pes }}
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="my-2">
                    <strong>Sumber Informasi : </strong>
                    {{ $person->sumber }}
                </p>
                <p class="my-2">
                    <strong>Infaq : </strong>
                    {{ $person->infaq }}
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="my-2">
                    <strong>Status : </strong>
                    {{ $person->status }}
                </p>
                <p class="my-2">
                    <strong>Status Pembayaran : </strong>
                    @if ($person->status_bayar == 1)
                        Sudah Bayar
                    @elseif($person->status_bayar == 0)
                        Belum Bayar
                    @endif
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Data Ayah/Wali
                </p>
                <p class="my-2">
                    <strong>Nama : </strong>
                    {{ $ayah->nama }}
                </p>
                <p class="my-2">
                    <strong>NIK : </strong>
                    {{ $ayah->NIK }}
                </p>
                <p class="my-2">
                    <strong>Status : </strong>
                    {{ $ayah->status }}
                </p>
                <p class="my-2">
                    <strong>WNI/WNA : </strong>
                    {{ $ayah->warga }}
                </p>
                <p class="my-2">
                    <strong>Agama : </strong>
                    {{ $ayah->agama }}
                </p>
                <p class="my-2">
                    <strong>Pendidikan Terakhir : </strong>
                    {{ $ayah->pendidikan }}
                </p>
                <p class="my-2">
                    <strong>Pekerjaan : </strong>
                    {{ $ayah->pekerjaan }}
                </p>
                <p class="my-2">
                    <strong>Penghasilan : </strong>
                    {{ $ayah->penghasilan }}
                </p>
                <p class="my-2">
                    <strong>Tempat/Tanggal Lahir : </strong>
                    {{ $ayah->tmp_lhr }} , {{ \Carbon\Carbon::parse($ayah->tgl_lhr)->format('d M Y') }}
                </p>
                <strong>File KTP Ayah/Wali</strong>
                <img class="my-2 mx-auto" alt="Foto KTP" height="200" src="{{ asset('global/data/KTP/' . $ayah->ktp) }}" width="300"/>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">
                    Data Ibu
                </p>
                <p class="my-2">
                    <strong>Nama : </strong>
                    {{ $ibu->nama }}
                </p>
                <p class="my-2">
                    <strong>NIK : </strong>
                    {{ $ibu->NIK }}
                </p>
                <p class="my-2">
                    <strong>Status : </strong>
                    {{ $ibu->status }}
                </p>
                <p class="my-2">
                    <strong>WNI/WNA : </strong>
                    {{ $ibu->warga }}
                </p>
                <p class="my-2">
                    <strong>Agama : </strong>
                    {{ $ibu->agama }}
                </p>
                <p class="my-2">
                    <strong>Pendidikan Terakhir : </strong>
                    {{ $ibu->pendidikan }}
                </p>
                <p class="my-2">
                    <strong>Pekerjaan : </strong>
                    {{ $ibu->pekerjaan }}
                </p>
                <p class="my-2">
                    <strong>Penghasilan : </strong>
                    {{ $ibu->penghasilan }}
                </p>
                <p class="my-2">
                    <strong>Tempat/Tanggal Lahir : </strong>
                    {{ $ibu->tmp_lhr }} , {{ \Carbon\Carbon::parse($ayah->tgl_lhr)->format('d M Y') }}
                </p>
                <strong>File KTP Ibu</strong>
                <img class="my-2 mx-auto" alt="Foto KTP" height="200" src="{{ asset('global/data/KTP/' . $ibu->ktp) }}" width="300"/>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">Akte Kelahiran</p>
                <img class="my-2 mx-auto" alt="Foto KTP" height="200" src="{{ asset('global/data/Akta/' . $file->akta) }}" width="300"/>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">Kartu Keluarga</p>
                <img class="my-2 mx-auto" alt="Foto KTP" height="200" src="{{ asset('global/data/KK/' . $file->kk) }}" width="300"/>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold mb-2">Ijazah</p>
                <img class="my-2 mx-auto" alt="Foto KTP" height="200" src="{{ asset('global/data/Ijasah/' . $file->ijasah) }}" width="300"/>
            </div>
        </div>
    </div>
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
