<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('home');
});


Route::get('/tentang', function () {
return view('about');
});


Route::get('/program', function () {
return view('program');
});


Route::get('/kegiatan', function () {
return view('kegiatan');
});


Route::get('/kontak', function () {
return view('kontak');
});