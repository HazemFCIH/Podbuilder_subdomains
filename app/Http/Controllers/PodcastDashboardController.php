<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastDashboardController extends Controller
{
public function index()
{
    $podcasts = Podcast::where('email', '=', auth()->user()->email)->get()->toArray();
    return view('front_dashboard.index' ,compact('podcasts'));
}
}
