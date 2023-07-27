<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get("/index", function () {
    return view("index");
})->name("index");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("/work", function () {
    return view("work");
})->name("work");

Route::get("/pricing", function () {
    return view("pricing");
})->name("pricing");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");
