<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = 'bank';
    protected $primaryKey = 'code';
    public $fillable = ['name'];


    public function rekening()
    {
        return $this->hasMany(Rekening::class, 'bank_id', 'code');
    }
}
