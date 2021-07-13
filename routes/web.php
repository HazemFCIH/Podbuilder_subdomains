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

Route::get('/', function () {
    return view('LandingPage.index');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/landing-page', function (){
    return view('LandingPage.index');
});
Route::get('/podcast-page', function (){
    return view('PodcastPage.index');
});
Route::resource('podcasts',\App\Http\Controllers\PodcastController::class);
Route::resource('podcasts.about', \App\Http\Controllers\PodcastAboutController::class)->only('index');
Route::resource('podcasts.episode', \App\Http\Controllers\EpisodeController::class)->only('show');
Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::get('/home',\App\Http\Controllers\PodcastDashboardController::class.'@index')->name('home');
    Route::post('social-media-set',\App\Http\Controllers\SocialMediaController::class.'@to_index')->name('social-media.set-index');
//    Route::get('social-media',\App\Http\Controllers\SocialMediaController::class.'@index')->name('social-media.index');
//    Route::get('social-media/create',\App\Http\Controllers\SocialMediaController::class.'@create')->name('social-media.create');
//    Route::post('social-media',\App\Http\Controllers\SocialMediaController::class.'@store')->name('social-media.store');
//    Route::put('social-media',\App\Http\Controllers\SocialMediaController::class.'@update')->name('social-media.update');
//    Route::get('social-media/{social-media}/edit}',\App\Http\Controllers\SocialMediaController::class.'@edit')->name('social-media.edit');
    Route::resource('social-media',\App\Http\Controllers\SocialMediaController::class);

});
