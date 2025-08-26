<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post
{
    public static function all()
    {
        return [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'title article 1',
                'author' => 'HIDUP (*&@^$',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio necessitatibus nihil voluptatibus 
      quibusdam quos cum modi excepturi nobis, sint porro placeat doloribus quo eaque eligendi magni rem unde ratione quam.' 
            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'title article 2',
                'author' => 'mulyono',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio necessitatibus nihil voluptatibus 
      quibusdam quos cum modi excepturi nobis, sint porro placeat doloribus quo eaque eligendi magni rem unde ratione quam.'
            ]
        ];
    }
}

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


    $post = Arr::first(Post::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'ahhhh post', 'post' => $post]);

});


Route::get('/report', function () {
    return view('report', ['title' => 'Report Page']);
});