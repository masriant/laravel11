<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Masrianto',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed modi, reprehenderit nesciunt placeat consequuntur pariatur doloremque aperiam temporibus ut labore ad tempora adipisci quidem voluptatibus, optio cumque ullam eveniet sint, deserunt nobis cum. Ex saepe quaerat architecto velit porro neque, nobis dicta harum, tempore cum dolor nemo at voluptatum!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Masrianto',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur numquam adipisci, ullam corrupti laudantium magnam totam veniam id, voluptatum velit commodi eveniet alias repudiandae odio mollitia facere incidunt optio, dolorum distinctio. Velit deleniti fugit est repellat debitis sapiente, doloribus corrupti ex dolore culpa voluptas, magni minima! Soluta, distinctio, ex alias minus doloremque accusamus veniam ullam magnam facere tempora laboriosam. Ratione fugiat dolor ipsa. Saepe praesentium, ad rem odit temporibus aspernatur.!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
