<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function hotel()
    {
    	return $this->belongsTo(Hotels::class);
    }

    public function author()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
    
}
