<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscribe extends Model
{
	protected $fillable = [
        'id_oferta', 'seleccionado',
    ];
    protected static function boot() {
		parent::boot();
		static::creating(function($inscribe) {
		$inscribe->user_id = auth()->id();
		});
	}
}
