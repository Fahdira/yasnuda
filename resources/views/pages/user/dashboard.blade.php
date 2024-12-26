@extends('layouts.user')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
     <div class="bg-white p-6 rounded shadow">
        @if ($info)
            <h2 class="text-xl font-semibold mb-4">
                {{ $info->judul }}
            </h2>
            {!! $info->content !!}
        @else
            <p class="text-gray-400">No Information Available</p>
        @endif
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Kontak Bantuan
      </h2>

      @if ($contact)
        <ul class="space-y-2">
            @foreach ($contact as $con)
                <li>
                    {{ $con->nama }} - {{ $con->no_telp }} ({{ $con->bagian }})
                </li>
            @endforeach
        </ul>
      @else
        <p class="text-gray-400">No Information Available</p>
      @endif
      
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       No. Rekening Bank
      </h2>
        @if ($rek)
            <ul class="space-y-2 mt-4">
                @foreach ($rek as $r)
                    <li>
                        {{ $r->nama }} - {{ $r->no_rek }} ({{ $r->bank->name }})
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-400">No Information Available</p>
        @endif
      
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Besar Biaya pendaftaran
      </h2>
        @if ($price)
            <ul class="space-y-2">
                @foreach ($price as $p)
                    <li>
                        {{ $p->instansi }} : Rp. {{ $p->harga }} -,
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-400">No Information Available</p>
        @endif
     </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Siswa Terdaftar : {{ $siswa->whereIn('status', ['Diperiksa', 'Diterima'])->count() }}
      </h2>
        @if ($pend)
            @if ($pend->status == 1)
                <a class="bg-teal-500 text-white px-4 py-2 rounded" href="{{ route('daftar1') }}">
                    Daftar Sekarang
                </a>
            @elseif ($pend->status == 0)
                <a disabled class="bg-gray-500 text-white px-4 py-2 rounded" href="#">
                    Pendaftaran Ditutup
                </a>
            @endif
        @else
            <p class="text-gray-400">No Information Available</p>
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
