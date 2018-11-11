<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $table='profile';
    protected $fillable = ['tlf', 'email', 'direccion', 'avatar','facebook', 'twitter', 'google', 'instagram', 'id_users'];

    public function users()
    {

    	return $this->belongsTo('App\users',  'id_users', 'id');


    }


}
