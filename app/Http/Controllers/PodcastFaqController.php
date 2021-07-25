<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\PodcastFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PodcastFaqController extends Controller
{

    public function to_index(Request $request){
        $podcast_data = Podcast::findOrFail($request->podcast_id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);

            return redirect()->route('dashboard.podcast-faqs.index');
        }
    }
    public function index()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.FAQ.index',compact('podcast_data'));
    }


    public function create()
    {
        $podcast_data = \Illuminate\Support\Facades\Session::get('podcast_data');

        return view('front_dashboard.FAQ.create',compact('podcast_data'));    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
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
                $request_data['image_url'] = 'Qdefault.png';

            }
            PodcastFaq::create($request_data);
            \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);
            return  redirect()->route('dashboard.podcast-faqs.index');

        }
    }

    public function show(PodcastFaq $podcastFaq)
    {
        //
    }


    public function edit(PodcastFaq $podcast_faq)
    {
        $podcast_data = Podcast::findOrFail($podcast_faq->podcast->id);
        if($podcast_data->email != auth()->user()->email){
            abort(404, 'Page not found');

        }else{
            return view('front_dashboard.FAQ.edit',compact('podcast_faq'));

        }
    }


    public function update(Request $request, PodcastFaq $podcast_faq)
    {

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image_url'=>'image',
        ]);
        $request_data = $request->all();
        if($request->image_url){
            if($podcast_faq->image_url != 'Qdefault.png'){
                Storage::disk('public_uploads')->delete('/user_images/'.$podcast_faq->image_url);

            }
            Image::make($request->image_url)->save(public_path('uploads/user_images/'.$request->image_url->hashName()));
            $request_data['image_url'] = $request->image_url->hashName();
        }
        $podcast_faq->update($request_data);
        $podcast_faq->save();
        $podcast_data = Podcast::findOrFail($podcast_faq->podcast->id);
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-faqs.index');
    }


    public function destroy(PodcastFaq $podcast_faq)
    {
        $podcast_data = Podcast::findOrFail($podcast_faq->podcast->id);
        $podcast_faq->delete();
        \Illuminate\Support\Facades\Session::put('podcast_data', $podcast_data);


        return redirect()->route('dashboard.podcast-faqs.index');
    }
}
