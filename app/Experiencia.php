<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{

    protected $fillable = [
        'puesto', 'funcion_realizada', 'empresa', 'sector_empresa','mes_anyo_inicio', 'mes_anyo_fin',
    ];
    
    protected static function boot() {
		parent::boot();
		static::creating(function($experiencia) {
		$experiencia->user_id = auth()->id();
		});
	}
}
