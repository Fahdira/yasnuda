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
        'id_guest'
    ];

    protected $attributes = [
        'status' => 0,
        'status_bayar' => 0,
    ];
}
