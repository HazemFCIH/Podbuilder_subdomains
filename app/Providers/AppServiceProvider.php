<?php

namespace App\Providers;

use App\Models\Podcast;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        view()->composer('*', function ($view)
        {
            if (isset(auth()->user()->email)){
            $podcasts = Podcast::where('email', '=', auth()->user()->email)->get()->toArray();

            //...with this variable
            $view->with('podcasts', $podcasts );
            }
        });
    }
}
