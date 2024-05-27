<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Masrianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed modi, reprehenderit nesciunt placeat consequuntur pariatur doloremque aperiam temporibus ut labore ad tempora adipisci quidem voluptatibus, optio cumque ullam eveniet sint, deserunt nobis cum. Ex saepe quaerat architecto velit porro neque, nobis dicta harum, tempore cum dolor nemo at voluptatum!'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Masrianto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur numquam adipisci, ullam corrupti laudantium magnam totam veniam id, voluptatum velit commodi eveniet alias repudiandae odio mollitia facere incidunt optio, dolorum distinctio. Velit deleniti fugit est repellat debitis sapiente, doloribus corrupti ex dolore culpa voluptas, magni minima! Soluta, distinctio, ex alias minus doloremque accusamus veniam ullam magnam facere tempora laboriosam. Ratione fugiat dolor ipsa. Saepe praesentium, ad rem odit temporibus aspernatur.!'
        ]
    ]]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
