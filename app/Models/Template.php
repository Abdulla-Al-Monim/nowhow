<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tags()
    {
        return $this->hasMany(TemplateTag::class);
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\UserTempleteCat','category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo('App\Models\UserTempleteSubCat','sub_category_id');
    }

    public function templateImage()
    {
        return $this->hasOne(TemplateImage::class,'template_id');
    }
}
