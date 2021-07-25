<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastFaqsController extends Controller
{

    public function index($subdomain)
    {
        $podcast = Podcast::where('sub_domain', $subdomain)->firstOrFail();
        $socielmedia = $podcast->socialmedias->first();

        view()->share(['podcast'=> $podcast,
            'socielmedia'=>$socielmedia,]);
        return view('PodcastPage.faqs');
    }


}
