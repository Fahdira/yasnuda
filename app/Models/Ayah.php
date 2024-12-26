<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    use HasFactory;

    protected $table = 'ayah';
    protected $primaryKey = 'NIK';
    public $incrementing = false;

    protected $fillable = [
        'NIK',
        'NIK_siswa',
        'nama',
        'pekerjaan',
        'pendidikan',
        'penghasilan',
        'status',
        'warga',
        'agama',
        'tmp_lhr',
        'tgl_lhr',
        'ktp',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'NIK_siswa', 'NIK_siswa');
    }
}
