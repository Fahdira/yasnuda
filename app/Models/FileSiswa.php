<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileSiswa extends Model
{
    use HasFactory;

    protected $table = 'file';
    protected $primaryKey = 'NIK_siswa';
    public $incrementing = false;

    protected $fillable = [
        'NIK_siswa',
        'pas_foto',
        'akta',
        'kk',
        'ijasah',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'NIK_siswa', 'NIK_siswa');
    }
}
