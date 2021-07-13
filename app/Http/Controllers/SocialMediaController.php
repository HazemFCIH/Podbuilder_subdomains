<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class SocialMediaController extends Controller
{
    public function to_index(Request $request){
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

            return redirect()->route('dashboard.social-media.index');
        }
    }
    public function index(Request $request)
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.SocialMedia.index',compact('podcast_data'));


    }


    public function create()
    {

        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.SocialMedia.create',compact('podcast_data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'facebook_link'=>'required_without_all:instagram_link,twitter_link,linkedIn_link',
            'instagram_link'=>'required_without_all:facebook_link,twitter_link,linkedIn_link',
            'twitter_link'=>'required_without_all:instagram_link,facebook_link,linkedIn_link',
            'linkedIn_link'=>'required_without_all:instagram_link,twitter_link,facebook_link',
            'podcast_id'=>'required',
            ]);
        SocialMedia::create($request->all());

        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

        }

        return redirect()->route('dashboard.social-media.index');

    }


    public function show(SocialMedia $socialMedia)
    {
        //
    }


    public function edit(SocialMedia $social_medium)
    {
        $podcast_data = Podcast::findOrFail($social_medium->podcast->id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
       return view('front_dashboard.SocialMedia.edit',compact('social_medium'));
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $social_medium)
    {
        $request->validate([
            'facebook_link'=>'required_without_all:instagram_link,twitter_link,linkedIn_link',
            'instagram_link'=>'required_without_all:facebook_link,twitter_link,linkedIn_link',
            'twitter_link'=>'required_without_all:instagram_link,facebook_link,linkedIn_link',
            'linkedIn_link'=>'required_without_all:instagram_link,twitter_link,facebook_link',
            'podcast_id'=>'required',
        ]);
        $social_medium->update($request->all());
        $social_medium->save();
        $podcast_data = Podcast::findOrFail($social_medium->podcast->id);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.social-media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $social_medium)
    {
        $podcast_data = Podcast::findOrFail($social_medium->podcast->id);
        $social_medium->delete();
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.social-media.index');
    }
}
