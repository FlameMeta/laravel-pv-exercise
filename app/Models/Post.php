<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'title article 1',
                'author' => 'HIDUP (*&@^$',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio necessitatibus nihil voluptatibus quibusdam quos cum modi excepturi nobis, sint porro placeat doloribus quo eaque eligendi magni rem unde ratione quam.' 
            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'title article 2',
                'author' => 'mulyono',
                'body' => 'Lorem ipsum sit amet consectetur adipisicing elit. Optio necessitatibus nihil voluptatibus quibusdam quos cum modi excepturi nobis, sint porro placeat doloribus quo eaque eligendi magni rem unde ratione quam.'
            ]
        ];
    }

    public static function find($slug): array # <= for make sure it return data is array 
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
            //     return $post['slug'] == $slug;
            // });
 
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);   //<<<=== arrow function php 8+ (callback)
        
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}

?>