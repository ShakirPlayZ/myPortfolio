<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/projects', function () {
    // Hier können auch GitHub-Daten dynamisch geladen werden
    return Inertia::render('Projects');
});