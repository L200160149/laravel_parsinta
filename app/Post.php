<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // =========== Cara 1
    //protected $table = 'posts'; 
    //untuk mengenali bahwa tabel yang digunakan adalah posts

    // =========== Cara 2
    protected $fillable = ['title', 'slug', 'body'];
    // untuk mengatur inputan yang boleh diinputkan hanya yang di dalam array

    // // =========== Cara 3
    // protected $guarded = [];
    // // digunakan hanya untuk blog pribadi tanpa ada user karena form dapat di edit



    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // public function scopeLatestFirst()
    // {
    //     return $this->latest()->first();
    // }

    // public function scopeLatestPost()
    // {
    //     return $this->latest()->get();
    // }


    public function category()
    {
        // // panggil model
        return $this->belongsTo(Category::class, 'category_id');
        // return $this->belongsTo(Category::class);
    }
}
