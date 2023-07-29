<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


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

Route::get("/a_propos", function () {
    return view("a_propos");
})->name("a_propos");


Route::get("/partenaire", function (){
    return view("partenaire");
})->name("partenaire");

Route::get("/consultant", function (){
    return view("consultant");
})->name("consultant");

Route::get("/technologie", function (){
    return view("technologie");
})->name("technologie");

Route::get("/portfolio", function (){
    return view("portfolio");
})->name("portfolio");

Route::get("/processus_intervention", function (){
    return view("processus_intervention");
})->name("processus_intervention");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");

Route::get("/blog", function () {
    return view("blog");
})->name("blog");

Route::get("/rejoindre_stack", function (){
    return view("rejoindre_stack");
})->name("rejoindre_stack");
// mail
Route::post('contact_mail',[MailController::class,'contact_mail_send']);