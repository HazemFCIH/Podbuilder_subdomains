<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function show($sub_domain,$episode_number)
    {
        $podcast = Podcast::where('sub_domain', $sub_domain)->firstOrFail();
        $socielmedia = $podcast->socialmedias->first();
        view()->share([
            'podcast'=> $podcast,
            'socielmedia'=> $socielmedia,
            ]);

        $f = \FeedReader::read($podcast->rss_feed);
        $f->handle_content_type();
       if ( !is_numeric($episode_number) || ((int)$episode_number < 0 || (int)$episode_number > (int)$f->get_item_quantity()  )){

        abort(404, 'Page not found');
       }
$episode = [];
        $item = $f->get_items()[$episode_number];
            $episode['episode_author_name'] = $item->get_author()->get_name();
            $episode['episode_title'] = $item->get_title();
            $episode['episode_description'] = $item->get_description();
            $episode['episode_content'] = $item->get_content();
            $episode['episode_date'] = $item->get_date();
            $episode['episode_id'] = $item->get_id();
            // item  enclosure level
            foreach ($item->get_enclosures() as $enclosure)
            {
                if (str_contains($enclosure->get_type(),'audio')){

                    $episode['episode_size'] =   $enclosure->get_size();
                    $episode['episode_audio'] =  $enclosure->get_Link();
                    $episode['episode_duration'] =  $enclosure->get_duration();
                }
                if (str_contains($enclosure->get_type(),'imag')){

                    $episode['episode_image'] =  $enclosure->get_Link();
                }
            }
            return view('PodcastPage.episode',compact('episode'));



    }


}
