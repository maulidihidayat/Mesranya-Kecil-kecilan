<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "tittle" => "Welcome"
    ]);
});

Route::get('/post', function () {

    $blog = [
        [
            "tittle" => "Maulidi hiyayat 🚀 is here",
            "athor" => "Maulidi hidayat",
            "topic" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eaque debitis distinctio nobis quibusdam cumque et, porro veniam quas quia suscipit labore architecto delectus eius tempora ullam vitae soluta, commodi sequi dicta? Quidem aut consequuntur voluptates laborum? Quo ad amet sed magni pariatur dolores nesciunt esse facere ducimus voluptatibus ipsa, laboriosam aliquam dolorum et, unde dolore eligendi fugit, ex nemo! Quibusdam sapiente architecto porro deserunt atque non qui suscipit, iusto soluta voluptatem ullam necessitatibus eius earum sint voluptatum nobis amet, molestiae quas. Ad consequuntur esse eius, ab, molestias illum veniam dolores repellat nostrum debitis quas impedit delectus, modi placeat recusandae?"
        ],
        [
            "tittle" => "Artificial Intelligence in the future",
            "athor" => "Dr. Jane Doe",
            "topic" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo quibusdam aut, quidem autem qui tempora, aperiam nemo maxime impedit veniam dignissimos, repellendus delectus! Quisquam, repellendus. Quo expedita recusandae dignissimos, perspiciatis veniam facilis autem nobis, quia, delectus voluptatibus cupiditate! Quod, voluptatibus. Doloribus, alias."

        ],
        [
            "tittle" => "How to survive in tech winter",
            "athor" => "Dr. Jane Doe",
            "topic" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo quibusdam aut, quidem autem qui tempora, aperiam nemo maxime impedit veniam dignissimos, repellendus delectus! Quisquam, repellendus. Quo expedita recusandae dignissimos, perspiciatis veniam facilis autem nobis, quia, delectus voluptatibus cupiditate! Quod, voluptatibus. Doloribus, alias."
        ]
    ];

    return view('post', [
        "tittle" => "Post",
        "blog" => $blog
    ]);
});

Route::get('/gallery', function () {
    return view("gallery", [
        "tittle" => "Gallery"
    ]);
});

Route::get('/admin', function () {
    return view("admin", [
        "tittle" => "Admin"
    ]);
});
