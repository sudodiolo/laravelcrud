<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{id?}/{aktif?}', function ($id = "hary", $aktif = "Y") {
    //return view('welcome');
    return "<h1>Nama saya $id saya hehe $aktif</h1>";
})->where('id','[a-z]*');

Route::view('/', 'welcome');

Route::put('simpan', function(){
    return "asw";
});

Route::get('crud', function(){
    return view('crud');
});