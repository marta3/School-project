<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfertaRequest;
use Illuminate\Http\Request;
use App\Oferta;
use App\Inscribe;
use App\Sectores;
use Illuminate\Support\Facades\Auth;
use App\Http\helpers;
use Illuminate\Support\Facades\DB;

class OfertaController extends Controller
{
	public function mostrar_panel(){
		return view('admin.panel_admin_ofertas');
	}
	public function mostrarOfertas(){
		$ofertas= Oferta::get();
		$sectores=Sectores::get();
		if(Auth::user()->confirmed==0){
			return view('usuarios.espera');
		}
		return view('admin.adminOfertas', compact('ofertas','sectores'));	
	}

    public function storeOferta(OfertaRequest $oferta_request) {

		Oferta::create($oferta_request->input());
		return back()->with('message', ['success', __('Oferta creada con éxito.')]); 
	}

	static public function modificar(OfertaRequest $oferta_request){

		Oferta::where('id', "=", $oferta_request->input('id'))->update($oferta_request->except(['_token']));
		return back()->with('message', ['success', __('Oferta modificada con éxito.')]); 

	}
	public function getSectores(){
		$sectores=Sectores::get();
		return view('admin.index', compact('sectores'));

	}

	public function getSectoress(){
		return Sectores::get();		

	}

	public function ofertasDisponibles(Request $req){
		if(isset($req->sectores)){
			$sect=$req->sectores;
		}
		else{
			$sect=[""];
		}
		
		$ofert_inscrita=DB::table('inscribes')
		->where('inscribes.user_id', '=', Auth::user()->id)
		->pluck('id_oferta');

		$ofer_totales=DB::table('ofertas')
		->whereIn('sector', $sect)
		->pluck('id');

		$result=$ofer_totales->diff($ofert_inscrita);
		$ofertas=DB::table('ofertas')
		->where('fecha_limite', '>', date('Y-m-d'))
		->whereIn('sector', $sect)
		->whereIn('id', $result)
		->select('id','titulo', 'sector','descripcion')
		->get();

		$ofertasInscritas=DB::table('ofertas')
		->join('inscribes', 'ofertas.id', '=', 'inscribes.id_oferta')
		->where('fecha_limite', '>', date('Y-m-d'))
		->where('inscribes.user_id', '=', Auth::user()->id)
		->whereIn('sector', $sect)
		->select('ofertas.id as idOfe','ofertas.titulo as titulo', 'inscribes.id as idIns', 'ofertas.sector as sector','ofertas.descripcion as descripcion')
		->get();
		
		$sectores=Sectores::get();

		if(Auth::user()->confirmed==0){
			return view('usuarios.espera');
		}

		return view('usuarios.ofertas', compact('ofertas', 'ofertasInscritas', 'sectores','sect'));
	}

	public function admin_ofertasDisponibles(){
		$ofertas=DB::table('ofertas')->where('fecha_limite', '>', date('Y-m-d'))->get();
		return view('admin.ofertas_disponibles', compact('ofertas'));
	}

	public function admin_usuarios_incritos($id){
        $usuarios = DB::table('inscribes')
        ->join('ofertas', 'inscribes.id_oferta', '=', 'ofertas.id')
        ->where('ofertas.id','=', $id)
        ->join('users', 'inscribes.user_id', '=' , 'users.id')
        ->select('users.id as idUsu','inscribes.id as idIns','name','second_name','email', 'ofertas.titulo as titulo', 'inscribes.seleccionado as seleccionado', 'ofertas.id as idOfe')
        ->get();

        return view('admin.admin_usuarios_inscritos', compact('usuarios'));
	}

	public function eliminar($id){
		$oferta=Oferta::find($id);

		$inscritos=Inscribe::where('id_oferta', '=', $id)->get();

		if($oferta->fecha_limite > date('Y-m-d') && $inscritos){

			return back()->with('message', ['danger', __('No se pudo eliminar la oferta.')]); 

		}
		elseif(($oferta->fecha_limite < date('Y-m-d')) || ($oferta->fecha_limite > date('Y-m-d') && ! $inscritos)){
			
			$oferta->Inscripciones()->delete();
			$oferta->delete();
			return back()->with('message', ['success', __('Oferta eliminada con éxito.')]); 
		}
		}

	}

