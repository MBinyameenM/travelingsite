<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function hotel()
    {
    	return $this->belongsTo(Hotels::class);
    }

    public function category()
    {
    	return $this->belongsTo(EventCategories::class,'category_id');
    }

    public function images()
    {
    	return $this->morphMany(Gallery::class,'imageable');
    }
    
}
