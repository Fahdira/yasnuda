<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekening';
    protected $primaryKey = 'id_rekening';
    public $incrementing = true;

    protected $fillable = [
        'nama',
        'no_rek',
        'code',
        'bank_id',
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'code');     
    }

}
