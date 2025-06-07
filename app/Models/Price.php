<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'price';
    protected $primaryKey = 'id_price';
    public $incrementing = true;

    protected $fillable = [
        'instansi',
        'harga',
        'desc',
    ];
}
