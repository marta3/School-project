<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
	protected $fillable = [
        'titulo', 'grado', 'centro', 'finalizado','anyo_finalizacion',
    ];
    protected static function boot() {
		parent::boot();
		static::creating(function($formacion) {
		$formacion->user_id = auth()->id();
		});
	}
}
