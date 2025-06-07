@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Dashboard')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
     <div class="bg-white p-6 rounded shadow">
        @if ($info)
            <h2 class="text-xl font-semibold mb-4">
                {{ $info->judul }}
            </h2>
            {!! $info->content !!}
        @else
            <p class="text-gray-400">Tidak ada Informasi untuk saat ini</p>
        @endif
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Kontak Bantuan
      </h2>
      @if ($contact)
        <ul class="space-y-2">
            @foreach ($contact as $con)
                <li><strong>{{ $con->nama }}</strong> ({{ $con->bagian }})</li>
                <p>+62 {{ $con->no_telp }}<a class="text-[#25D366]" href="https://wa.me/62{{$con->no_telp}}"><i class="fab fa-whatsapp text-2l ps-2 pe-1"></i>Link Whatsapp</a></p>
            @endforeach
        </ul>
      @else
        <p class="text-gray-400">Tidak ada data Kontak</p>
      @endif
    <p class="text-gray-400 pt-4"><small>Jika sudah melakukan Pembayaran dapat menghubungi kontak diatas dengan mengirimkan bukti pembayaran</small></p>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">No. Rekening Bank</h2>
        @if ($rek)
            <ul class="space-y-2 mt-4">
                @foreach ($rek as $r)
                    <li>
                        <strong>{{ $r->nama }}</strong> - {{ $r->no_rek }} ({{ $r->bank->name }})
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-400">Tidak ada data Rekening</p>
        @endif
        <p class="text-gray-400 pt-2"><small>Silahkan lakukan pembayaran ke salah satu nomer rekening diatas</small></p>
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Siswa Terdaftar : {{ $siswa->whereIn('status', ['Diperiksa', 'Diterima'])->count() }}
      </h2>
      @if ($siswa)
        @foreach ($siswa as $s)
            @if ($s->status == 'Diperiksa')
                <li>{{$s->nama}} (<strong>{{$s->status}}</strong>)</li>
            @endif
        @endforeach
      @endif
      <p class="text-gray-400 pt-2"><small>Jika Belum melakukan Pembayaran dapat membuka page dengan siswa terdaftar di bagian kiri</small></p>
     </div>
     <div class="bg-white p-6 rounded shadow">
        @if ($pend)
            @if ($pend->status == 1)
                <h2 class="text-xl font-semibold mb-4">Status Pendaftaran : <strong class="text-[#25D366]">Dibuka</strong></h2>
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="{{ route('daftar1') }}">
                    Daftar Sekarang
                </a>
            @elseif ($pend->status == 0)
                <h2 class="text-xl font-semibold mb-4">Status Pendaftaran : <strong class="text-red-500">Ditutup</strong></h2>
                <a disabled class="bg-gray-500 text-white px-4 py-2 rounded" href="#">
                    Pendaftaran Ditutup
                </a>
            @endif
        @else
            <p class="text-gray-400">No Information Available</p>
        @endif
        <p class="text-gray-400 pt-4"><small>Mohon lakukan pembayaran dengan jumlah biaya pendaftaran yang tertera</small></p>
        <p class="text-gray-400"><small>Jika mendaftar lebih dari satu, pembayaran dilakukan satu per satu</small></p>
     </div>
    </div>
    @if (session('success-daftar'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "Berhasil Mendaftar, Mohon cek data-data dan Lakukan Pembayaran",
                icon: "success",
                timer: 3000,
            });
        </script>
    @endif

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
