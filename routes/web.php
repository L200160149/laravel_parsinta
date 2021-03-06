<?php

use Illuminate\Support\Facades\Route;


// ================================================
// ================================================ VIDEO 4
// ================================================

// ================ Cara 1 Pemanggilan View
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome');
// ================ Cara 2 Pemanggilan View


// ================
// Route::get('/contact', function () {
//     return 'Contact us';
// });
// ================


// ================ url, view
// Route::view('binamarga', 'binamarga.berita.berita');
// ================


// ================
// Route::get('/', function () {
//     $data = 'Lorem ipsum dolor sit amet consectetur 
//     adipisicing elit. Assumenda nobis officiis est facilis nihil harum omnis minus, 
//     eum maiores nam? Placeat voluptatem aliquam magnam iste dolores quaerat doloribus, 
//     molestiae veniam.';
//     return view('welcome', ['data' => $data]);
// });
// ================

// ================================================
// ================================================ AKHIR VIDEO 4
// ================================================



// ================================================
// ================================================ VIDEO 5,6
// ================================================

// Route::get('/', function () {
//     $name = request('name');
//     return view('welcome', ['name' => $name]);
// });

Route::get('/', 'HomeController');

// Route::get('contact', function () {

//     // Cara 1
//     //return request()->path() == 'contact' ? 'Sama' : 'Tidak';

//     // Cara 2
//     return request()->is('contact') ? 'Sama' : 'Tidak';
// });
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');
// ================================================
// ================================================ AKHIR VIDEO 5,6
// ================================================



// ================================================
// ================================================ VIDEO 
// ================================================

// Route::get('/post/{slug}', 'PostController@show');
Route::get('posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create');
Route::post('/posts/store', 'PostController@store');

Route::get('/posts/{post:slug}/edit', 'PostController@edit');
Route::patch('/posts/{post:slug}/edit', 'PostController@update');
// patch edit sebagian
// put edit semua field

Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::get('categories/{category:slug}', 'CategoryController@show');

Route::get('tags/{tag:slug}', 'TagController@show');

Route::get('/posts/{post:slug}', 'PostController@show');

// Route::post('/posts/store', 'PostController@store');
// :slug adalah key

// ================================================
// ================================================ AKHIR VIDEO 
// ================================================