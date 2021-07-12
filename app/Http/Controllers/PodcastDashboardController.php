<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastDashboardController extends Controller
{
public function index()
{

    return view('front_dashboard.index' );
}
}
