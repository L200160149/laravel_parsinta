<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // untuk membuat relasi n-m ke Post Model
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
