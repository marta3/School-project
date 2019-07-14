<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdiomaRequest;
use Illuminate\Http\Request;
use App\Idioma;
use Illuminate\Support\Facades\Auth;
use App\Http\helpers;
use Illuminate\Support\Facades\DB;

class IdiomaController extends Controller
{
    static public function modificar(IdiomaRequest $idioma_request){

		Idioma::where('id', "=", $idioma_request->input('id'))->update($idioma_request->except(['_token']));
		alert()->success('Idioma modificado correctamente')->autoclose(3000);
		
		return back();


	}

    public function storeIdioma(IdiomaRequest $idioma_request) {

		Idioma::create($idioma_request->input());
		alert()->success('Idioma creado correctamente')->autoclose(3000);
		
		return back();		


	}

	public function eliminar($id){
		DB::table('idiomas')->where('id', '=', $id)->delete();
		alert()->success('Idioma eliminado correctamente')->autoclose(3000);
		
		return back();
	}
}
