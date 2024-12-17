<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    public $incrementing = true;

    protected $fillable = [
        'tahun',
        'status',
        'tgl_dibuka',
        'tgl_ditutup',
    ];

    protected $casts = [ 'status' => 'boolean',];
}
