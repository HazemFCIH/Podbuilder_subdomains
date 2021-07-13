<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{

    public function index(){
        abort(404, 'Page not found');

//    {
//        $f = \FeedReader::read('https://feeds.redcircle.com/848c9c3c-38e1-4660-8b97-99027b5ee77a');
//        $f->handle_content_type();
//        // feed level
//        $podcast = [];
//         $podcast['author_name'] = $f->get_author()->get_name();
//        $podcast['language'] =   $f->get_language();
//        $podcast['title'] =$f->get_title();
//        $podcast['description'] =$f->get_description();
//        $podcast['image_path'] =$f->get_image_url();
////        echo "Podcast Image link: ".$f->get_image_link().'<br>';
////        echo "Podcast Image title: ".$f->get_image_title().'<br>';
//        $podcast['premalink'] = $f->get_permalink();
//        $podcast['copyright'] = $f->get_copyright();
//        $podcast['episodes_number'] = $f->get_item_quantity();
//            $episodes = [];
//        // item level
//        $i = 0;
//        foreach ($f->get_items() as $item){
//            $episodes[$i]['episode_auhtor_name'] = $item->get_author()->get_name();
//            $episodes[$i]['episode_title'] = $item->get_title();
//            $episodes[$i]['episode_description'] = $item->get_description();
//            $episodes[$i]['episode_content'] = $item->get_content();
//            $episodes[$i]['episode_date'] = $item->get_date();
//            $episodes[$i]['episode_id'] = $item->get_id();
//            // item  enclosure level
//            foreach ($item->get_enclosures() as $enclosure)
//            {
//                if (str_contains($enclosure->get_type(),'audio')){
//
//                    $episodes[$i]['episode_size'] =   $enclosure->get_size();
//                    $episodes[$i]['episode_audio'] =  $enclosure->get_Link();
//                    $episodes[$i]['episode_duration'] =  $enclosure->get_duration();
//                }
//                if (str_contains($enclosure->get_type(),'imag')){
//
//                    $episodes[$i]['episode_image'] =  $enclosure->get_Link();
//                }
//            }
//            $i++;
//        }
//
//        return view('PodcastPage.index',compact('podcast','episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $f = \FeedReader::read('https://feeds.redcircle.com/ac0361dd-9d6d-44b5-97a5-11674733c431');
//        $f->handle_content_type();
//        // feed level
//        echo "Author Name: ".$f->get_author()->get_name().'<br>';
//        echo "Podcast Language: ".$f->get_language().'<br>';
//        echo "Podcast Title: ".$f->get_title().'<br>';
//        echo "Podcast Description: ".$f->get_description().'<br>';
//        echo "Podcast Image: ".$f->get_image_url().'<br>';
////        echo "Podcast Image link: ".$f->get_image_link().'<br>';
////        echo "Podcast Image title: ".$f->get_image_title().'<br>';
//        echo "Podcast premalink: ".$f->get_permalink().'<br>';
//        echo "Podcast copyright: ".$f->get_copyright().'<br>';
//        echo "Podcast Episodes Number: ".$f->get_item_quantity() .'<br>';
//
//        // item level
//        foreach ($f->get_items() as $item){
//            echo "Episode Author name ".$item->get_author()->get_name().'<br>';
//            echo "Episode Name ".$item->get_title().'<br>';
//            echo "Episode Description ".$item->get_description().'<br>';
//            echo "Episode Date ".$item->get_date().'<br>';
//            echo "Episode id ".$item->get_id() .'<br>';
//            // item  enclosure level
//            foreach ($item->get_enclosures() as $enclosure)
//            {
//                echo "Episode enco exe: ".$enclosure->get_extension().'<br>';
//                echo "Episode enco size: ".$enclosure->get_size().'<br>';
//                echo "Episode enco type:".$enclosure->get_type().'<br>';
//                echo "Episode enco link:".$enclosure->get_Link().'<br>';
//                echo "Episode enco duration:".$enclosure->get_duration().'<br>';
//
//
//            }
//        }


    }


    public function store(Request $request)
    {
        $request->validate(['rss_feed'=> 'required']);
        if (filter_var($request->rss_feed, FILTER_VALIDATE_URL)) {
            $f = \FeedReader::read($request->rss_feed);
            $f->handle_content_type();
            if(isset($f->get_items()[0])){
                $rss_type = $f->get_items()[0]->get_enclosure()->get_type();
                if (str_contains($rss_type, 'audio')) {

                    $sub_domain = uniqid('mypodcast-');
                    $podcast_title = $f->get_title();
                    $podcast_description =   $f->get_description();
                    $podcast_image=     $f->get_image_url();
                    $podcast_language =$f->get_language();
                    $podcast_author=$f->get_author()->get_name();
                    $podcast_premalink = $f->get_permalink();
                    Podcast::create([
                        'sub_domain' =>$sub_domain,
                        'email' =>auth()->user()->email,
                        'rss_feed' =>$request->rss_feed,
                        'podcast_title' =>$podcast_title,
                        'podcast_description' =>$podcast_description,
                        'podcast_image' =>$podcast_image,
                        'podcast_language' =>$podcast_language,
                        'podcast_author' =>$podcast_author,
                        'podcast_premalink' =>$podcast_premalink,
                    ]);
                    return redirect()->route('podcasts.show',$sub_domain);

                } else {
                    return redirect()->back();
                }
            }else{
                return redirect()->back();

            }

        }else{
            return redirect()->back();
        }
    }


    public function show($subdomain)
    {
        $podcast = Podcast::where('sub_domain', $subdomain)->firstOrFail();
        $socielmedia = $podcast->socialmedias->first();
         view()->share([
             'podcast'=>$podcast,
             'socielmedia'=>$socielmedia,
                            ]);
        $f = \FeedReader::read($podcast->rss_feed);
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
         return view('PodcastPage.index',compact('episodes'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {

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
