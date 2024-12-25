@extends('layouts.user')
@section('content')
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
        Jika diterima Informasi akan diberitahu oleh Admin
       </li>
      </ol>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Kontak Bantuan
      </h2>
      <ul class="space-y-2">
        @foreach ($contact as $con)
            <li>
                {{ $con->nama }} - {{ $con->no_telp }} ({{ $con->bagian }})
            </li>
        @endforeach
      </ul>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       No. Rekening Bank
      </h2>
      <ul class="space-y-2 mt-4">
        @foreach ($rek as $r)
            <li>
                {{ $r->nama }} - {{ $r->no_rek }} ({{ $r->bank->name }})
            </li>
        @endforeach
      </ul>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Besar Biaya pendaftaran
      </h2>
      <ul class="space-y-2">
        @foreach ($price as $p)
            <li>
                {{ $p->instansi }} : Rp. {{ $p->harga }} -,
            </li>
        @endforeach
      </ul>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Siswa Terdaftar : 0
      </h2>
      @if ($pend->status == 1)
            <a class="bg-teal-500 text-white px-4 py-2 rounded" href="{{ route('daftar1') }}">
                Daftar Sekarang
            </a>
        @elseif ($pend->status == 0)
            <a disabled class="bg-gray-500 text-white px-4 py-2 rounded" href="#">
                Pendaftaran Ditutup
            </a>
        @endif
     </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "Berhasil Login",
                icon: "success",
                timer: 2000,
            });
        </script>
    @endif
@stop
