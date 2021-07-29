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


Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::get('/home',\App\Http\Controllers\PodcastDashboardController::class.'@index')->name('home');
    Route::get('/home/edit/profile',\App\Http\Controllers\HomeController::class.'@editProfile')->name('editProfile');
    Route::post('/home/edit/profile',\App\Http\Controllers\HomeController::class.'@UpdateProfile')->name('UpdateProfile');
    Route::post('social-media-set',\App\Http\Controllers\SocialMediaController::class.'@to_index')->name('social-media.set-index');
    Route::resource('social-media',\App\Http\Controllers\SocialMediaController::class);
    Route::post('podcast-hosts-set',\App\Http\Controllers\PodcastHostController::class.'@to_index')->name('podcast-hosts.set-index');
    Route::resource('podcast-hosts',\App\Http\Controllers\PodcastHostController::class);
    Route::post('podcast-guests-set',\App\Http\Controllers\PodcastGuestController::class.'@to_index')->name('podcast-guests.set-index');
    Route::resource('podcast-guests',\App\Http\Controllers\PodcastGuestController::class);
    Route::post('podcast-faqs-set',\App\Http\Controllers\PodcastFaqController::class.'@to_index')->name('podcast-faqs.set-index');
    Route::resource('podcast-faqs',\App\Http\Controllers\PodcastFaqController::class);
    Route::post('podcast-settings-set',\App\Http\Controllers\PodcastSettingController::class.'@to_index')->name('podcast-settings.set-index');

    Route::resource('podcast-settings',\App\Http\Controllers\PodcastSettingController::class);

});
