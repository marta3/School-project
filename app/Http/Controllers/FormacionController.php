<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormacionRequest;
use App\Formacion;
use Illuminate\Support\Facades\Auth;
use App\Http\helpers;
use Illuminate\Support\Facades\DB;
class FormacionController extends Controller
{
	static public function modificar(FormacionRequest $formacion_request){
		
		Formacion::where('id', "=", $formacion_request->input('id'))->update($formacion_request->except(['_token']));
		alert()->success('Formacion modificada con éxito.')->autoclose(3000);
		return back();

	}

    public function storeFormacion(FormacionRequest $formacion_request) {
    	
		Formacion::create($formacion_request->input());
		alert()->success('Formacion creada correctamente')->autoclose(3000);
		return back();

	}

	public function eliminar($id){
		DB::table('formacions')->where('id', '=', $id)->delete();

		alert()->success('Formacion eliminada correctamente')->autoclose(3000);
		return back();

	}
}
