<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{

    public function index()
    {
        $f = \FeedReader::read('https://www.omnycontent.com/d/playlist/5a56d7c3-f281-4557-8e31-aac8017ccf06/e7f15ef0-c09f-41b6-bd38-ab0500c045ef/697481d2-88df-4eb3-bf72-ab0500c29e9f/podcast.rss');
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
            $episodes = [];
        // item level
        $i = 0;
        foreach ($f->get_items() as $item){
            $episodes[$i]['episode_auhtor_name'] = $item->get_author()->get_name();
            $episodes[$i]['episode_title'] = $item->get_title();
            $episodes[$i]['episode_description'] = $item->get_description();
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

        return view('PodcastPage.index',compact('podcast','episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $f = \FeedReader::read('https://feeds.redcircle.com/ac0361dd-9d6d-44b5-97a5-11674733c431');
        $f->handle_content_type();
        // feed level
        echo "Author Name: ".$f->get_author()->get_name().'<br>';
        echo "Podcast Language: ".$f->get_language().'<br>';
        echo "Podcast Title: ".$f->get_title().'<br>';
        echo "Podcast Description: ".$f->get_description().'<br>';
        echo "Podcast Image: ".$f->get_image_url().'<br>';
//        echo "Podcast Image link: ".$f->get_image_link().'<br>';
//        echo "Podcast Image title: ".$f->get_image_title().'<br>';
        echo "Podcast premalink: ".$f->get_permalink().'<br>';
        echo "Podcast copyright: ".$f->get_copyright().'<br>';
        echo "Podcast Episodes Number: ".$f->get_item_quantity() .'<br>';

        // item level
        foreach ($f->get_items() as $item){
            echo "Episode Author name ".$item->get_author()->get_name().'<br>';
            echo "Episode Name ".$item->get_title().'<br>';
            echo "Episode Description ".$item->get_description().'<br>';
            echo "Episode Date ".$item->get_date().'<br>';
            echo "Episode id ".$item->get_id() .'<br>';
            // item  enclosure level
            foreach ($item->get_enclosures() as $enclosure)
            {
                echo "Episode enco exe: ".$enclosure->get_extension().'<br>';
                echo "Episode enco size: ".$enclosure->get_size().'<br>';
                echo "Episode enco type:".$enclosure->get_type().'<br>';
                echo "Episode enco link:".$enclosure->get_Link().'<br>';
                echo "Episode enco duration:".$enclosure->get_duration().'<br>';


            }
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
