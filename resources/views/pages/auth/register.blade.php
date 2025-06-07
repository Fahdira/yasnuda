@extends('layouts.auth')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Register')
@section('content')
<div class="container max-w-4xl mx-auto my-auto">
    <h1 class="text-4xl font-light mb-8">Daftar Online</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="border p-8">
            <h2 class="text-xl font-bold mb-4">Buat Akun Pendaftaran</h2>
            <form class="space-y-6" action="{{ route('store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" name="username" placeholder="Username" id="username" autocomplete="username" required class="block w-full rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" id="email" autocomplete="email" required class="block w-full rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
                <div class="mb-4">
                    <input type="number" name="no_telp" placeholder="No. Telepon" id="no_telp" autocomplete="no_telp" required onclick="fillInput()" class="block w-full rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
                <div class="mb-4 flex space-x-4">
                    <input type="password" name="password" id="password" autocomplete="current-password" required placeholder="Password" class="w-1/2 block rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="current-password" required placeholder="Ulangi Password" class="w-1/2 block rounded-sm bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
                <div class="mb-4">
                    <button type="submit"  class="w-full bg-teal-500 hover:bg-teal-600 text-white p-2">Register</button>
                </div>
                <div class="text-center text-sm">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Sudah Punya Akun?</a>
                </div>
            </form>
        </div>
        <div class="border p-8">
            <h2 class="text-xl font-bold mb-4">Informasi Pendaftaran</h2>
            @empty($info && $pendaftaran && $contact)
                <p>Tidak ada data</p>
            @endempty
            @isset($pendaftaran)
                @foreach ($pendaftaran as $pen)
                    <li>Pendaftaran tahun <strong>{{ $pen->tahun }}</strong></li>
                    @if ($pen->status == 1)
                        <p class="ps-6">Status pendaftaran : <strong class="text-[#25D366]">Dibuka</strong></p>
                    @elseif ($pen->status == 0)
                        <p class="ps-6">Status pendaftaran : <strong class="text-rose-700">Ditutup</strong></p>
                    @endif
                    <p class="ps-6">Tanggal Dibuka : <strong>{{ \Carbon\Carbon::parse($pen->tgl_dibuka)->format('d M Y') }}</strong></p>
                    <p class="ps-6">Tanggal Ditutup : <strong>{{ \Carbon\Carbon::parse($pen->tgl_ditutup)->format('d M Y') }}</strong></p>
                @endforeach
            @endisset
            @isset($info)
                @foreach ($info as $inf)
                    <li>{{ $inf->judul }}</li>
                    <div class="ps-6 pb-2">{!! $inf->content !!}</div>
                @endforeach
            @endisset
            @isset($contact)
                <h3 class="text-lg font-bold mb-2">Kontak yang bisa dihubungi</h3>
                @foreach ($contact as $con)
                    <li><strong>{{ $con->nama }}</strong> ({{ $con->bagian }})</li>
                    <p class="ps-6">+62 {{ $con->no_telp }}<a class="text-[#25D366]" href="https://wa.me/62{{$con->no_telp}}"><i class="fab fa-whatsapp text-2l ps-2 pe-1"></i>Link Whatsapp</a></p>
                @endforeach
            @endisset
            <div class="text-center text-sm pt-8">
                <p class="text-gray-600 hover:text-gray-900">Jika tidak page tidak berubah saat melakukan pendaftaran, silahkan daftar ulang</p>
            </div>
        </div>
        <div class="fixed bottom-4 right-4">
            <a class="w-12 h-12 bg-[#25D366] text-white rounded-full flex items-center justify-center" href="https://wa.link/21ittc">
                <i class="fab fa-whatsapp text-2xl"></i>
            </a>
        </div>
    </div>
</div>

<script>
    function fillInput() {
        const inputField = document.getElementById('no_telp');
        if (!inputField.value) { // Only fill if the field is empty
        inputField.value = "08"; // Default phone number
        }
    }
</script>
@stop
