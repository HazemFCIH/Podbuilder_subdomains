<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function socialmedias(){
        return $this->hasMany(SocialMedia::class);
    }
    public function podcastHosts(){
        return $this->hasMany(PodcastHost::class);
    }
    public function podcastGuests(){
        return $this->hasMany(PodcastGuest::class);
    }
}

