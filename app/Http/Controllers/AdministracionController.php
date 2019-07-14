<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\LynX39\LaraPdfMerger\PdfManage;
use App\Http\Controllers\ZipArchive;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
class AdministracionController extends Controller
{

	public function show_usuarios(){

		return User::orderBy('created_at')->where('id', '<>', Auth::user()->id)->get();
	}

	public function show_usuarios_noconfirmed(){
		   
		$usuarios=User::where('confirmed', '=', 0)->get();

    	return view('admin.activacion', compact('usuarios'));
	}

	public function mostrar_usuarios_activos(){
		
		return User::where('confirmed', '=', 1)
		->where('id', '<>', Auth::user()->id)
		->get();
	}

	public function administrar_admin($id){
		$user=User::find($id);
		if($user->tipo==0){
			$user->tipo=1;
		}
		else{
			$user->tipo=0;
		}

		$user->save();
		return back();
	}

	public function borrarUsuario($id){
		$user=User::find($id);
		$user->experiencias()->delete();
		$user->formaciones()->delete();
		$user->idiomas()->delete();
		$user->ofertas()->delete();
		$user->delete();

	}

	public function administrar_seleccionados($id){

		$user=User::find($id);
		if($user->seleccionado==1){
			$user->seleccionado=0;
		}
		else{
			$user->seleccionado=1;
		}

		$user->save();
		
		return back();
	}

	public function informe_usuarios_disponibles(){

		$users = DB::table('users')
		->join('inscribes', 'users.id', '=', 'inscribes.user_id')
		->join('ofertas', 'inscribes.id_oferta' , '=', 'ofertas.id')
		->select('name', 'second_name', 'email', 'telefono', 'sector')
		->orderBy('sector')
		->distinct()
		->get();

        $pdf = PDF::loadView('informes.usuarios_disponible', compact('users'));
        
        return $pdf->download('usuarios_disponible.pdf');
    }

	public function informe_ofertas_disponibles(Request $request){
		$ofertas=DB::table('ofertas')
		->whereBetween('fecha_limite', [$request->fecha1, $request->fecha2])
		->get();

		$pdf = PDF::loadView('informes.ofertas', compact('ofertas'));

		return $pdf->download('ofertas.pdf');
	}

	public function informe_usuarios_seleccionados(Request $request){
		$users=DB::table('users')
		->join('inscribes', 'users.id', '=', 'inscribes.user_id')
		->join('ofertas', 'inscribes.id_oferta', '=', 'ofertas.id')
		->select('empresa', 'name', 'second_name', 'ofertas.sector as sectorEmp')
		->whereBetween('inscribes.updated_at', [$request->fecha1, $request->fecha2])
		->where('seleccionado', '=', 1)
		->get();

		$pdf = PDF::loadView('informes.usuarios_seleccionados', compact('users'));

		return $pdf->download('usuarios_seleccionados.pdf');
	}

	public function exportar_curriculums(Request $req){

		$folder= 'curriculums usuarios/' . 'oferta ' . $req->idOferta .'/';
		if(isset($req->usuarios)){
			foreach ($req->usuarios as $usuario) {
				$formacion=DB::table('formacions')->where('user_id', '=', $usuario)->get();
				
				$experiencia=DB::table('experiencias')->where('user_id', '=', $usuario)->get();
				$idioma=DB::table('idiomas')->where('user_id', '=', $usuario)->get();
				$user=DB::table('users')->where('id', '=', $usuario)->get();
				$name= 'curriculum usuario ' . $usuario . '.pdf';
		 		$this->saveDisk($name,$folder, $formacion, $experiencia, $idioma,$user);
			}
		}

		return back()->with('message', ['success', __('Curriculums exportados en public/' . $folder)]); 
	}

	public static function saveDisk($name,$folder, $formacion,$experiencia,$idioma, $user){
		set_time_limit(0);


		$dompdf= new Dompdf();
		$dompdf = PDF::loadView('pdf.CV', compact('formacion', 'experiencia', 'idioma', 'user'));
		
		$output= $dompdf->output();
		$file_to_save= $folder .  $name;

		if(! file_exists($folder)){
			if(mkdir($folder, 0777, true)){
				file_put_contents($file_to_save, $output);
			}
		}else{
			file_put_contents($file_to_save, $output);
		}

	}
}
