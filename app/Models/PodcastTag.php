<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastTag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function podcast()
    {
        return $this->belongsTo('App\Models\Podcast','podcast_id');
    }
}
