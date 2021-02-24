<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $table = 'posts'; 
    //untuk mengenali bahwa tabel yang digunakan adalah posts

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }

    public function scopeLatestPost()
    {
        return $this->latest()->get();
    }
}
