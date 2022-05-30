<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeAudio extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function audio()
    {
        return $this->belongsTo('App\Models\Audio');
    }
}
