<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
	protected $table='orders';
    protected $fillable = ['Nombre', 'Apellido', 'Email', 'Telefono', 'Cantidad', 'Fecha', 'Comentario', 'Type_Coffee', 'Size', 'Extra', 'Dulzor', 'id_users'];

    public function users()
    {

    	return $this->belongsTo('App\Users',  'id_users', 'id');


    }


}
