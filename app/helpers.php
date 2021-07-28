<?php


function get_episodes_from_rss_feed($rss_feed){
    $f = \FeedReader::read($rss_feed);
    $f->handle_content_type();
    $episodes = [];
    // item level
    $i = 0;
    foreach ($f->get_items() as $item){
        $episodes[$i]['episode_auhtor_name'] = $item->get_author()->get_name();
        $episodes[$i]['episode_title'] = $item->get_title();
        $episodes[$i]['episode_description'] = $item->get_description();
        $episodes[$i]['episode_content'] = $item->get_content();
        $episodes[$i]['episode_date'] = $item->get_date();
        $episodes[$i]['episode_id'] = $item->get_id();
        // item  enclosure level
        foreach ($item->get_enclosures() as $enclosure)
        {
            if (str_contains($enclosure->get_type(),'audio')){

                $episodes[$i]['episode_size'] =   $enclosure->get_size();
                $episodes[$i]['episode_audio'] =  $enclosure->get_Link();
                $episodes[$i]['episode_duration'] =  $enclosure->get_duration();
            }
            if (str_contains($enclosure->get_type(),'imag')){

                $episodes[$i]['episode_image'] =  $enclosure->get_Link();
            }
        }
        $i++;
    }
    return $episodes;
}
