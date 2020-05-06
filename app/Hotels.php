<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function facilities()
    {
    	return $this->hasOne(Facilities::class,'hotel_id');
    }

    public function images()
    {
    	return $this->morphMany(Gallery::class,'imageable');
    }

    public function ratings()
    {
        return $this->HasMany(Reviews::class,'hotel_id');
    }
    public function events()
    {
        return $this->HasMany(Events::class,'hotel_id');
    }
    
}
