<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastAboutController extends Controller
{

    public function index($subdomain)
    {
        $podcast = Podcast::where('sub_domain', $subdomain)->firstOrFail();
        view()->share('podcast', $podcast);
        return view('PodcastPage.about');
    }


}
