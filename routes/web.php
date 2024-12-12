<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get("/minji", function () {
    return view("minji");
});

Route::get("/haerin", function () {
    return view("haerin");
});
