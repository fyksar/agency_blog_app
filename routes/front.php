<?php

use Illuminate\Support\Facades\Route;

Route::get('front-agency', function (){
    return view('front-agency');
});

Route::get('front-home', function (){
    return view('front-home');
});

Route::get('BBU', function (){
    return view('BBU');
});
