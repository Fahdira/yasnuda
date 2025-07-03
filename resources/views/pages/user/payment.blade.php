@extends('layouts.user')
@section('title', 'PPDB Online Yayasan Nuurul Hudaa | Edit Profile')
@section('content')
<!-- Profile Form -->
     <h1 class="text-2xl font-bold mb-6">
      Silahkan Lakukan Pembayaran sesuai dengan informasi dibawah
     </h1>
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <p class="text-gray-400">Pembayaran untuk calon siswa : </p>
            <p class="">{{ $person->nama }}</p>
            <p class="pb-4">Instansi yang diajukan : <strong>{{ $person->daftar_ke }}</strong></p>
            <table class="w-full table-auto text-left border-collapse border border-gray-200">
                <thead>
                    <tr>
                        <th class="p-2 border border-gray-200">No</th>
                        <th class="p-2 border border-gray-200">Detail</th>
                        <th class="p-2 border border-gray-200">Kategori Pembayaran</th>
                        <th class="p-2 border border-gray-200">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @if($person->daftar_ke == 'MDTA NUURUL HUDAA')
                        @foreach($price as $p)
                            @if ($p->instansi == 'MDTA NUURUL HUDAA')
                            <tr>
                                <td class="p-2">{{ $i }}</td>
                                <td class="p-2">{{ $p->desc }}</td>
                                <td class="p-2">{{ $p->jenis }}</td>
                                <td class="p-2">Rp. {{ $p->harga }}-,</td>
                                @php $i++ @endphp
                            </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td class="p-2">#</td>
                            <td class="p-2">Infaq Calon Santri</td>
                            <td class="p-2"></td>
                            <td class="p-2">Rp. {{ $person->infaq }}-,</td>
                        </tr>
                    @endif
                    @if($person->daftar_ke == 'MTS NUURUL HUDAA')
                        @foreach($price as $p)
                            @if ($p->instansi == 'MTS NUURUL HUDAA')
                            <tr>
                                <td class="p-2">{{ $i }}</td>
                                <td class="p-2">{{ $p->desc }}</td>
                                <td class="p-2">{{ $p->instansi }}</td>
                                <td class="p-2">Rp. {{ $p->harga }}-,</td>
                                @php $i++ @endphp
                            </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td class="p-2">#</td>
                            <td class="p-2">Infaq Calon Santri</td>
                            <td class="p-2"></td>
                            <td class="p-2">Rp. {{ $person->infaq }}-,</td>
                        </tr>
                    @endif
                    @if($person->daftar_ke == 'MA NUURUL HUDAA')
                        @foreach($price as $p)
                            @if ($p->instansi == 'MA NUURUL HUDAA')
                            <tr>
                                <td class="p-2">{{ $i }}</td>
                                <td class="p-2">Pendaftaran</td>
                                <td class="p-2">{{ $p->instansi }}</td>
                                <td class="p-2">Rp. {{ $p->harga }}-,</td>
                                @php $i++ @endphp
                            </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td class="p-2">#</td>
                            <td class="p-2">Infaq Calon Santri</td>
                            <td class="p-2"></td>
                            <td class="p-2">Rp. {{ $person->infaq }}-,</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            @if($person->daftar_ke == 'MDTA NUURUL HUDAA')
                <p class="text-right pt-4 text-xl">Total Pembayaran : Rp. <strong> {{ $sum_mdta }}</strong>-,</p>
            @endif
            @if($person->daftar_ke == 'MTS NUURUL HUDAA')
                <p class="text-right pt-4 text-xl">Total Pembayaran : Rp. <strong> {{ $sum_mts }}</strong>-,</p>
            @endif
            @if($person->daftar_ke == 'MA NUURUL HUDAA')
                <p class="text-right pt-4 text-xl">Total Pembayaran :Rp. <strong> {{ $sum_ma }}</strong>-,</p>
            @endif
            <p class="text-gray-400 pt-4 text-right"><small>*Silahkan melakukan transfer sejumlah biaya diatas lalu konfirmasi kepada administrasi dengan mengirimkan bukti transfer</small></p>
            <div class="pt-4 flex justify-end space-x-4">
                @if($person->daftar_ke == 'MDTA NUURUL HUDAA')
                    <a href="{{ route('dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                        Kembali ke Beranda
                    </a>
                    @if ($contact_mdta)
                        <a href="https://wa.me/62{{$contact_mdta->no_telp}}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded">
                            Hubungi Administrasi
                        </a>
                    @endif
                @endif
                @if($person->daftar_ke == 'MTS NUURUL HUDAA')
                    <a href="{{ route('dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                        Kembali ke Beranda
                    </a>
                    @if ($contact_mts)
                        <a href="https://wa.me/62{{$contact_mts->no_telp}}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded">
                            Hubungi Administrasi
                        </a>
                    @endif
                @endif
                @if($person->daftar_ke == 'MA NUURUL HUDAA')
                    <a href="{{ route('dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                        Kembali ke Beranda
                    </a>
                    @if ($contact_ma)
                        <a href="https://wa.me/62{{$contact_ma->no_telp}}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded">
                            Hubungi Administrasi
                        </a>
                    @endif
                @endif
            </div>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-2xl font-bold mb-6">Informasi Pembayaran</h3>
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
            <h3 class="text-2xl font-bold my-4">Kontak</h3>
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
        </div>
     </div>
@stop
