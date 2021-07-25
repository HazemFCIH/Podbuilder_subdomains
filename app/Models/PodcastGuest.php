<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastGuest extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['image_path'];
    public function getImagePathAttribute(){
        return asset('public/uploads/user_images/'.$this->image_url);
    }
    public function podcast(){
        return $this->belongsTo(Podcast::class);

    }
}
