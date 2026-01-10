<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/coverage', function () {
    return view('coverage');
})->name('coverage');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms-of-service', function () {
    return view('terms');
})->name('terms');

Route::post('/contact/send', function (Request $request) {
    // For now, this just sends you back with a success message
    return back()->with('success', 'Inquiry sent successfully!');
})->name('inquiry.store');