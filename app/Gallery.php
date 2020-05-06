<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = "gallery";
    protected $guarded = ['id','created_at','updated_at'];

	public function imageable()
	{
		return $this->morphTo();
	}

}
