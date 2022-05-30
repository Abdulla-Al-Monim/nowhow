<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeLibrary extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function library()
    {
        return $this->belongsTo('App\Models\Library','library_id');
    }
}
