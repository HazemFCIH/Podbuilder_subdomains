<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::domain('{subdomain}.'.config('app.short_url'))->group(function () {
    Route::get('/', [App\Http\Controllers\PodcastController::class, 'subdomain_index'])->name('subdomain_index');
    Route::resource('about', \App\Http\Controllers\PodcastAboutController::class)->only('index');
    Route::resource('episode', \App\Http\Controllers\EpisodeController::class)->only('show');
    Route::resource('faqs', \App\Http\Controllers\PodcastFaqsController::class)->only('index');

});




