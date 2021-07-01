<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $f = \FeedReader::read('https://feeds.redcircle.com/ac0361dd-9d6d-44b5-97a5-11674733c431');
        $f->handle_content_type();
        // feed level
        $podcast = [];
        $podcast['author_name'] = $f->get_author()->get_name();
        $podcast['language'] =   $f->get_language();
        $podcast['title'] =$f->get_title();
        $podcast['description'] =$f->get_description();
        $podcast['image_path'] =$f->get_image_url();
//        echo "Podcast Image link: ".$f->get_image_link().'<br>';
//        echo "Podcast Image title: ".$f->get_image_title().'<br>';
        $podcast['premalink'] = $f->get_permalink();
        $podcast['copyright'] = $f->get_copyright();
        $podcast['episodes_number'] = $f->get_item_quantity();
        view()->share('podcast', $podcast);

    }
}
