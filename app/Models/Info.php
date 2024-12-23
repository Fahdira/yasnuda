<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';
    protected $primaryKey = 'id_info';
    public $incrementing = true;

    protected $fillable = [
        'judul',
        'content',
        'status',
    ];

    protected $casts = [ 'status' => 'boolean',];
}
