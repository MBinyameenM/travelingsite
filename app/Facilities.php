<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function hotel()
    {
    	return $this->belongsTo(Hotels::class);
    }
    
}
