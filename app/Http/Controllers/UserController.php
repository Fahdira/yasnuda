<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Posts;
use App\Models\Guest;
use App\Models\Rekening;
use App\Models\Contact;
use App\Models\Price;
use App\Models\Pendaftaran;
use App\Models\Info;
use App\Models\Siswa;
use App\Models\Alamat;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\FileSiswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function home(){

        $posts = Posts::orderBy('created_at', 'desc')
                        ->with('user')
                        ->take(3)
                        ->get();
        return view('pages.home', compact('posts'));
    }

    public function blog(){

        $posts = Posts::orderBy('created_at', 'desc')
                        ->with('user')
                        ->get();
        return view('pages.blog', compact('posts'));
    }

    public function blog_isi($post)
    {
        $post = Posts::with('user')->where('slug', $post)->firstOrFail();
        return view('pages.blog_isi', compact('post'));
    }



    public function dashboard(){

        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $contact = Contact::All();
            $rek = Rekening::with('bank')->get();
            $price = Price::All();
            $pend = Pendaftaran::orderBy('created_at')->first();
            $info = Info::where('status', 1)->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.dashboard', compact('users','contact','rek','price','pend','info','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function payment($id){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $contact = Contact::All();
            $contact_mdta = Contact::where('bagian','MDTA NUURUL HUDAA')->first();
            $contact_mts = Contact::where('bagian','MTS NUURUL HUDAA')->first();
            $contact_ma = Contact::where('bagian','MA NUURUL HUDAA')->first();
            $rek = Rekening::with('bank')->get();
            $price = Price::All();
            $sum_mdta_byr = Price::where('instansi','MDTA NUURUL HUDAA')->sum('harga');
            $sum_mts_byr = Price::where('instansi','MTS NUURUL HUDAA')->sum('harga');
            $sum_ma_byr = Price::where('instansi','MA NUURUL HUDAA')->sum('harga');
            $person = Siswa::where('NISN', $id)->first();
            $infaq = $person->infaq;
            $sum_mdta = $sum_mdta_byr+$infaq;
            $sum_mts = $sum_mdta_byr+$infaq;
            $sum_ma = $sum_mdta_byr+$infaq;
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.payment', compact('users','contact','rek','price','siswa','person','sum_mdta','sum_mts','sum_ma','contact_mdta','contact_mts','contact_ma'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public  function informasi() {
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            $pend = Pendaftaran::orderBy('created_at')->first();
            $info = Info::where('status', 1)->first();
            $price = Price::All();
            return view('pages.user.informasi', compact('users','pend','siswa','info','price'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function profile(){

        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.profile', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function edit() {
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.editprofile', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function update(Request $request) {
        if (session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $users->username = $request->input('username');
            $users->no_telp = $request->input('no_telp');
            $password = $request->input('password');
            $users->password = Hash::make($password);
            $users->email = $request->input('email');

            $input = $request->except('_token','password');
            $users->update($input);

            return redirect()->route('profile')->with('success','Data telah diperbarui');
        }
        else {
            return redirect()->route('edit')->with('error','Form Harus Terisi');
        }
    }

    public function siswa($id){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            $person = Siswa::where('NISN', $id)->first();
            $alamat = Alamat::where('NIK_siswa', $person->NIK_siswa)->first();
            $ayah = Ayah::where('NIK_siswa', $person->NIK_siswa)->first();
            $ibu = Ibu::where('NIK_siswa', $person->NIK_siswa)->first();
            $file = FileSiswa::where('NIK_siswa', $person->NIK_siswa)->first();

            return view('pages.user.siswa', compact('users','siswa','person','alamat','ayah','ibu','file'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function daftar1(){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.daftar1', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function store1(Request $request){
        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $pendaftaran = Pendaftaran::where('status', 1)->first();
            $input = new Siswa([
                'nama' => strtoupper($request->get('nama')),
                'NIK_siswa' => $request->get('NIK_siswa'),
                'NISN' => $request->get('NISN'),
                'asal_sklh' => strtoupper($request->get('asal_sklh')),
                'tmp_lhr' => strtoupper($request->get('tmp_lhr')),
                'tgl_lhr' => $request->get('tgl_lhr'),
                'agama' => strtoupper($request->get('agama')),
                'warga' => $request->get('warga'),
                'jenis' => strtoupper($request->get('jenis')),
                'anak_ke' => $request->get('anak_ke'),
                'dari_br' => $request->get('dari_br'),
                'keb_khusus' => strtoupper($request->get('keb_khusus','-')),
                'keb_dis' => strtoupper($request->get('keb_dis','-')),
                'daftar_ke' => $request->get('daftar_ke'),
                'daftar_pes' => $request->get('daftar_pes'),
                'sumber' => $request->get('sumber'),
                'infaq' =>$request->get('infaq'),
                'tahun_ajrn' =>$pendaftaran->id_pendaftaran,
                'id_guest'=>$users->id_guest,
            ]);
            $required = ['nama','NIK_siswa','NISN','asal_sklh','tmp_lhr','tgl_lhr','agama','warga','jenis','anak_ke','dari_br',
                                            'daftar_ke','daftar_pes','sumber','infaq','tahun_ajrn','id_guest'];
            $check_input = collect($required)->every(function ($key) use ($input) {
                return !empty(data_get($input, $key));
            });
            if ($check_input) {
                $input->save();
                return redirect()->route('daftar2')->with('success','Data Siswa telah disimpan');
            } else {
                return redirect()->route('daftar1')->with('error','Form Harus Terisi');
            }
        }
        else {
            return redirect()->route('daftar1')->with('error','Form Harus Terisi');
        }

    }

    public function daftar2(){
        $id = session('id');
        $siswa = Siswa::find($id);

        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.daftar2', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function store2(Request $request){
        if(session()->has('users')){
            $id = session('id');
            $siswa = Siswa::find($id);
            $input = new Alamat([
                'alamat' => strtoupper($request->get('alamat')),
                'desa' => strtoupper($request->get('desa')),
                'kecamatan' => strtoupper($request->get('kecamatan')),
                'kabupaten/kota' => strtoupper($request->get('kabupaten/kota')),
                'provinsi' => strtoupper($request->get('provinsi')),
                'NIK_siswa' => $id,
            ]);

            $required = ['alamat','desa','kecamatan','kabupaten/kota','provinsi','NIK_siswa'];
            $check_input = collect($required)->every(function ($key) use ($input) {
                return !empty(data_get($input, $key));
            });
            if ($check_input) {
                $siswa->status = 'Tahap 2';
                $siswa->update();
                $input->save();
                return redirect()->route('daftar3')->with('success','Data Alamat telah disimpan');
            } else {
                return redirect()->route('daftar2')->with('error','Form Harus Terisi');
            }
        }
        else {
            return redirect()->route('daftar2')->with('error','Form Harus Terisi');
        }
    }

    public function daftar3(){
        $id = session('id');
        $siswa = Siswa::find($id);

        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.daftar3', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function store3(Request $request){
        if (session()->has('users')) {
            $id = session('id'); ;
            $siswa = Siswa::find($id);
            $input_ayah = new Ayah([
                'nama' => strtoupper($request->get('nama_ayah')),
                'NIK' => $request->get('NIK_ayah'),
                'pekerjaan' => strtoupper($request->get('pekerjaan_ayah')),
                'pendidikan' => $request->get('pendidikan_ayah'),
                'penghasilan' => $request->get('penghasilan_ayah'),
                'status' => $request->get('status_ayah'),
                'warga' => $request->get('warga_ayah'),
                'agama' => strtoupper($request->get('agama_ayah')),
                'tmp_lhr' => strtoupper($request->get('tmp_lhr_ayah')),
                'tgl_lhr' => $request->get('tgl_lhr_ayah'),
                'NIK_siswa' => $id,
            ]);
                if ($file = $request->file('ktp_ayah')) {
                    $name = $file->getClientOriginalName();
                    $destinationPath = 'global/data/KTP';
                    $fileName = date('YmdHis') . "_" . "KTP" . "_" . $name;
                    $file->move($destinationPath, $fileName);
                    $input_ayah['ktp'] = "$fileName";
                }

            $input_ibu = new Ibu([
                'nama' => strtoupper($request->get('nama_ibu')),
                'NIK' => $request->get('NIK_ibu'),
                'pekerjaan' => strtoupper($request->get('pekerjaan_ibu')),
                'pendidikan' => $request->get('pendidikan_ibu'),
                'penghasilan' => $request->get('penghasilan_ibu'),
                'status' => $request->get('status_ibu'),
                'warga' => $request->get('warga_ibu'),
                'agama' => strtoupper($request->get('agama_ibu')),
                'tmp_lhr' => strtoupper($request->get('tmp_lhr_ibu')),
                'tgl_lhr' => $request->get('tgl_lhr_ibu'),
                'NIK_siswa' => $id,
            ]);
                if ($file = $request->file('ktp_ibu')) {
                    $name = $file->getClientOriginalName();
                    $destinationPath = 'global/data/KTP';
                    $fileName = date('YmdHis') . "_" . "KTP" . "_" . $name;
                    $file->move($destinationPath, $fileName);
                    $input_ibu['ktp'] = "$fileName";
                }
            $required_ibu = ['nama','NIK','pekerjaan','pendidikan','penghasilan','status','warga','agama','tmp_lhr','tgl_lhr','NIK_siswa'];
            $required_ayah = ['nama','NIK','pekerjaan','pendidikan','penghasilan','status','warga','agama','tmp_lhr','tgl_lhr','NIK_siswa'];
            $check_input_ibu = collect($required_ibu)->every(function ($key) use ($input_ibu) {
                return !empty(data_get($input_ibu, $key));
            });
            $check_input_ayah = collect($required_ayah)->every(function ($key) use ($input_ayah) {
                return !empty(data_get($input_ayah, $key));
            });

            if ($check_input_ibu && $check_input_ayah) {
                $siswa->status = 'Tahap 3';
                $siswa->update();
                $input_ayah->save();
                $input_ibu->save();

                return redirect()->route('daftar4')->with('success', 'Data Telah telah disimpan');
            } else {
                return redirect()->route('daftar3')->with('error', 'Form Harus Terisi');
            }

            
        } else {
            return redirect()->route('daftar3')->with('error', 'Form Harus Terisi');
        }

    }

    public function daftar4(){
        $id = session('id');
        $siswa = Siswa::find($id);

        if(session()->has('users')){
            $users = Guest::where('email', session('users'))->first();
            $siswa = Siswa::join('guest', 'siswa.id_guest', '=', 'guest.id_guest')->where('guest.email', session('users'))->get();
            return view('pages.user.daftar4', compact('users','siswa'));
        }
            return view('pages.auth.login')->with('session', 'Session telah habis, silahkan login kembali');
    }

    public function store4(Request $request){
        if (session()->has('users')) {
            $id = session('id'); ;
            $siswa = Siswa::find($id);
            $input = new FileSiswa([
                'NIK_siswa' => $id,
            ]);

            if ($file = $request->file('akta')) {
                $name = $file->getClientOriginalName();
                $destinationPath = 'global/data/Akta';
                $fileName = date('YmdHis') . "_" . "AKTA" . "_" . $name;
                $file->move($destinationPath, $fileName);
                $input['akta'] = "$fileName";
            }

            if ($file = $request->file('pas_foto')) {
                $name = $file->getClientOriginalName();
                $destinationPath = 'global/data/Foto';
                $fileName = date('YmdHis') . "_" . "FOTO" . "_" . $name;
                $file->move($destinationPath, $fileName);
                $input['pas_foto'] = "$fileName";
            }

            if ($file = $request->file('kk')) {
                $name = $file->getClientOriginalName();
                $destinationPath = 'global/data/KK';
                $fileName = date('YmdHis') . "_" . "KK" . "_" . $name;
                $file->move($destinationPath, $fileName);
                $input['kk'] = "$fileName";
            }

            if ($file = $request->file('ijasah')) {
                $name = $file->getClientOriginalName();
                $destinationPath = 'global/data/Ijasah';
                $fileName = date('YmdHis') . "_" . "IJZ" . "_" . $name;
                $file->move($destinationPath, $fileName);
                $input['ijasah'] = "$fileName";
            }

            $required = ['akta','pas_foto','kk','ijasah','NIK_siswa'];
            $check_input = collect($required)->every(function ($key) use ($input) {
                return !empty(data_get($input, $key));
            });

            if ($check_input) {
                $siswa->status = 'Diperiksa';
                $siswa->update();
                $input->save();
                return redirect()->route('dashboard')->with('success-daftar', 'Data Telah telah disimpan');
            } else {
                return redirect()->route('daftar4')->with('error', 'Form Harus Terisi');
            }

            } else {
                return redirect()->route('daftar4')->with('error', 'Form Harus Terisi');
            }
    }

}
