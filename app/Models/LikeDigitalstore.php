<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDigitalstore extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function digitalStore()
    {
        return $this->belongsTo('App\Models\DigitalStore','digital_store_id');
    }
}
