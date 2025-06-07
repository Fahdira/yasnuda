<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'NIK_siswa';
    protected $unique = 'NISN';
    public $incrementing = false;

    protected $fillable = [
        'NIK_siswa',
        'NISN',
        'nama',
        'tmp_lhr',
        'tgl_lhr',
        'warga',
        'agama',
        'anak_ke',
        'dari_br',
        'asal_sklh',
        'jenis',
        'keb_khusus',
        'keb_dis',
        'daftar_ke',
        'daftar_pes',
        'sumber',
        'infaq',
        'status',
        'status_bayar',
        'tahun_ajrn',
        'id_guest'
    ];

    protected $attributes = [
        'status' => 'Tahap 1',
        'keb_dis' => 'Tidak Ada',
        'keb_khusus' => 'Tidak Ada',
        'status_bayar' => 0,
    ];

    public function tahun()
    {
        return $this->belongsTo(Pendaftaran::class, 'tahun_ajrn', 'id_pendaftaran');  
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'id_guest', 'id_guest');  
    }

    public function alamat()
    {
        return $this->hasOne(Alamat::class, 'NIK_siswa', 'NIK_siswa');  
    }

    public function ayah()
    {
        return $this->hasOne(Ayah::class, 'NIK_siswa', 'NIK_siswa');  
    }

    public function ibu()
    {
        return $this->hasOne(Ibu::class, 'NIK_siswa', 'NIK_siswa');  
    }

    public function file()
    {
        return $this->hasOne(FileSiswa::class, 'NIK_siswa', 'NIK_siswa');  
    }
}
