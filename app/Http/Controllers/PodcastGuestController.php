<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\PodcastGuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PodcastGuestController extends Controller
{
    public function to_index(Request $request){
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

            return redirect()->route('dashboard.podcast-guests.index');
        }
    }

    public function index()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.Guests.index',compact('podcast_data'));
    }


    public function create()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.Guests.create',compact('podcast_data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'episode_number'=>'required',
            'description'=>'required',
            'image_url'=>'image',
        ]);
        $request_data = $request->all();
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            if($request->image_url){
                \Intervention\Image\Facades\Image::make($request->image_url)->save(public_path('uploads/user_images/'.$request->image_url->hashName()));
                $request_data['image_url'] = $request->image_url->hashName();
            }else{
                $request_data['image_url'] = 'default.png';

            }
            PodcastGuest::create($request_data);
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);
            return  redirect()->route('dashboard.podcast-guests.index');

        }
    }


    public function show(PodcastGuest $podcastGuest)
    {
        //
    }


    public function edit(PodcastGuest $podcast_guest)
    {
        $podcast_data = Podcast::findOrFail($podcast_guest->podcast->id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            return view('front_dashboard.Guests.edit',compact('podcast_guest'));

        }
    }


    public function update(Request $request, PodcastGuest $podcast_guest)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'episode_number'=>'required',
            'image_url'=>'image',
        ]);
        $request_data = $request->all();
        if($request->image_url){
            if($podcast_guest->image_url != 'default.png'){
                Storage::disk('public_uploads')->delete('/user_images/'.$podcast_guest->image_url);

            }
            Image::make($request->image_url)->save(public_path('uploads/user_images/'.$request->image_url->hashName()));
            $request_data['image_url'] = $request->image_url->hashName();
        }
        $podcast_guest->update($request_data);
        $podcast_guest->save();
        $podcast_data = Podcast::findOrFail($podcast_guest->podcast->id);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-guests.index');
    }


    public function destroy(PodcastGuest $podcast_guest)
    {
        $podcast_data = Podcast::findOrFail($podcast_guest->podcast->id);
        $podcast_guest->delete();
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-guests.index');
    }
}
