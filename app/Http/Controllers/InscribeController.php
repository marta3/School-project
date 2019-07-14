<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscribe;
use App\Sectores;
use Illuminate\Support\Facades\DB;

class InscribeController extends Controller
{
	public function inscribir($id){
		$inscripcion = new Inscribe();
        $inscripcion->id_oferta = $id;
        
        $inscripcion->save();
        $sectores=Sectores::get();
        
		return back();
	}    

	public function eliminar($id){
		DB::table('inscribes')->where('id', '=', $id)->delete();
		alert()->success('Inscripcion eliminada correctamente')->autoclose(1000);
		$sectores=Sectores::get();
		return back();
	}

	public function administrar_seleccionados($id){

		$inscripcion=Inscribe::find($id);
		if($inscripcion->seleccionado==1){
			$inscripcion->seleccionado=0;
		}
		else{
			$inscripcion->seleccionado=1;
		}

		$inscripcion->save();
		
		return back();
	}

}
