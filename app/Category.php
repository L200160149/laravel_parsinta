<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        // direlasikan dengan tabel kategori
        return $this->hasMany(Post::class, 'category_id');
    }
}
