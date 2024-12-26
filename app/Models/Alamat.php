<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat';
    protected $primaryKey = 'NIK_siswa';
    public $incrementing = false;

    protected $fillable = [
        'NIK_siswa',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten/kota',
        'provinsi',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'NIK_siswa', 'NIK_siswa');
    }
}
