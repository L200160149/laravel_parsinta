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
Route::get('post', 'PostController@index');
Route::get('/post/{post:slug}', 'PostController@show');
// :slug adalah key

// ================================================
// ================================================ AKHIR VIDEO 
// ================================================