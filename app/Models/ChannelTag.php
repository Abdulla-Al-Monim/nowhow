<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelTag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function channel()
    {
        return $this->belongsTo('App\Models\Channel','channel_id');
    }
}
