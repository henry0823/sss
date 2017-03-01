<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = ['domain'];

    //
    public function users()
    {
		return $this->belongsToMany('App\User', 'user_stores', 'user_id', 'store_id');
    }
}