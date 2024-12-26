@extends('layouts.user')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Status Pendaftaran
      </h2>
        @if ($pend)
            <p>Status Pendaftaran Tahun Ajaran {{ $pend->tahun }} : 
                    <span class="{{ $pend->status == 1 ? 'text-green-500' : 'text-red-500' }}">
                        <b>{{ $pend->status == 1 ? 'Dibuka' : 'Ditutup' }}</b>
                    </span>
                </p>
            <p>Tanggal dibuka pendaftaran : {{ \Carbon\Carbon::parse($pend->tgl_dibuka)->format('d M Y') }} hingga {{ \Carbon\Carbon::parse($pend->tgl_ditutup)->format('d M Y') }}</p>
        @else
            <p class="text-gray-400">No Information Available</p>
        @endif
      
    </div>
     <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">
       Siswa Terdaftar : 0
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
