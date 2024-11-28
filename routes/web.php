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
    return view('app.view.index');
})->name('home');

Route::get('/about', function () {
    return view('app.view.about');
})->name('about');

Route::get('/resume', function () {
    return view('app.view.resume');
})->name('resume');

Route::get('/contact', function () {
    return view('app.view.contact');
})->name('contact');

Route::get('/myprojects', function () {
    return view('app.view.myprojects');
})->name('myprojects');

Route::get('/myprojects/gikuapp', function () {
    return view('app.view.detail.gikuapp-detail');
})->name('myprojects.gikuapp');

Route::get('/myprojects/webdesa', function () {
    return view('app.view.detail.webdesa-detail');
})->name('myprojects.webdesa');

Route::get('/myprojects/admingiku', function () {
    return view('app.view.detail.admingiku-detail');
})->name('myprojects.admingiku');

Route::get('/myprojects/myportfolio', function () {
    return view('app.view.detail.myportfolio-detail');
})->name('myprojects.myportfolio');