<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;



class Posts extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'posts'; 
    protected $primaryKey = 'id_posts';
    public $incrementing = true;

    protected $fillable = [
        'judul',
        'desc',
        'content',
        'slug',
        'published',
        'id', 
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail')
             ->singleFile(); 
    }

    protected $casts = [ 'published' => 'boolean',];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');  
    }

    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('images') 
    //          ->useDisk('public');
    // }
}
