<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', function() {
    return view('students');
});

Route::get('students/{id}', function() {
    return view('students');
});