<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'empresa', 'sector','fecha_limite',
    ];

   	public function Inscripciones(){
     	return $this->hasMany('App\Inscribe', 'id_oferta');
    }
}
