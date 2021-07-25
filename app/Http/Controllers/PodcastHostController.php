<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\PodcastHost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class PodcastHostController extends Controller
{
    public function to_index(Request $request){
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

            return redirect()->route('dashboard.podcast-hosts.index');
        }
    }
    public function index()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.Hosts.index',compact('podcast_data'));
    }


    public function create()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.Hosts.create',compact('podcast_data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
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
        PodcastHost::create($request_data);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);
        return  redirect()->route('dashboard.podcast-hosts.index');

        }


    }


    public function show(PodcastHost $podcastHost)
    {

    }

    public function edit(PodcastHost $podcast_host)
    {
        $podcast_data = Podcast::findOrFail($podcast_host->podcast->id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
        return view('front_dashboard.Hosts.edit',compact('podcast_host'));

    }
    }

    public function update(Request $request, PodcastHost $podcast_host)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image_url'=>'image',
        ]);
        $request_data = $request->all();
        if($request->image_url){
            if($podcast_host->image_url != 'default.png'){
                Storage::disk('public_uploads')->delete('/user_images/'.$podcast_host->image_url);

            }
            Image::make($request->image_url)->save(public_path('uploads/user_images/'.$request->image_url->hashName()));
            $request_data['image_url'] = $request->image_url->hashName();
        }
        $podcast_host->update($request_data);
        $podcast_host->save();
        $podcast_data = Podcast::findOrFail($podcast_host->podcast->id);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-hosts.index');

    }


    public function destroy(PodcastHost $podcast_host)
    {
        $podcast_data = Podcast::findOrFail($podcast_host->podcast->id);
        $podcast_host->delete();
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-hosts.index');
    }
}
