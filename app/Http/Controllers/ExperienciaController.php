<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienciaRequest;
use Illuminate\Http\Request;
use App\Experiencia;
use Illuminate\Support\Facades\Auth;
use App\Http\helpers;
use Illuminate\Support\Facades\DB;

class ExperienciaController extends Controller
{

	static public function modificar(ExperienciaRequest $experiencia_request){

		Experiencia::where('id', "=", $experiencia_request->input('id'))->update($experiencia_request->except(['_token']));
		alert()->success('Experiencia modificada con éxito.')->autoclose(3000);
		
		return back();

	}

    public function storeExperiencia(ExperienciaRequest $experiencia_request) {

		Experiencia::create($experiencia_request->input());
		alert()->success('Experiencia creada correctamente')->autoclose(3000);
		
		return back();		

	}

	public function eliminar($id){
		DB::table('experiencias')->where('id', '=', $id)->delete();
		alert()->success('Experiencia eliminada correctamente')->autoclose(3000);
		
		return back();	

	}
}
