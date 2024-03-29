<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'second_name', 'provincia', 'localidad','direccion', 'telefono', 'fecha_nac', 'email', 'password', 'dni', 'vehiculo','foto','confirmation_code', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function experiencias(){
     return $this->hasMany(Experiencia::class);
    }

    public function formaciones(){
     return $this->hasMany(Formacion::class);
    }

    public function idiomas(){
     return $this->hasMany(Idioma::class);
    }

    public function Ofertas(){
     return $this->hasMany(Inscribe::class);
    }

    public function pathFoto(){
        return "/app/users/" . $this->foto;
    }
}
