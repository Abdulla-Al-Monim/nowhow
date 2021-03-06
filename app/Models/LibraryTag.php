<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryTag extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function librariry()
    {
        return $this->belongsTo('App\Models\Library','library_id');
    }
}
