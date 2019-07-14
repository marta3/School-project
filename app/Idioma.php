<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $fillable = [
        'idioma', 'nivel_hablado', 'nivel_escrito', 'titulo_oficial',
    ];
    
    protected static function boot() {
		parent::boot();
		static::creating(function($idioma) {
		$idioma->user_id = auth()->id();
		});
	}
}
