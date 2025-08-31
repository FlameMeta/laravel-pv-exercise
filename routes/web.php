<?php

use App\Models\Post;
// use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/blog/{slug}', function ($slug) {

    $post = Post::find($slug);
    
    return view('post', ['title' => 'ahhhh post', 'post' => $post]);
});

Route::get('/report', function () {
    return view('report', ['title' => 'Report Page']);
});