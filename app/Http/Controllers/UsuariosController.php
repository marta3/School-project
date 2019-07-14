<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormacionRequest;
use App\Http\Requests\UsuariosRequest;
use Illuminate\Http\Request;
use App\User;
use App\Formacion;
use App\Inscribe;
use App\Sectores;
use App\Titulo;
use Illuminate\Support\Facades\Auth;
use App\Http\helpers;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class UsuariosController extends Controller
{

	public function show(){
		if(Auth::user()->tipo==0){
			$formacion=DB::table('formacions')->where('user_id', '=', Auth::user()->id)->get();
			$experiencia=DB::table('experiencias')->where('user_id', '=', Auth::user()->id)->get();
			$idioma=DB::table('idiomas')->where('user_id', '=', Auth::user()->id)->get();
			$sectores=Sectores::orderBy('nombre')->get();
			$titulos=Titulo::orderBy('nombre')->get();
			if(Auth::user()->confirmed==0){
				return view('usuarios.espera');
			}
			return view('usuarios.menu', compact('formacion','experiencia','idioma','sectores','titulos'));
		}else{
			return redirect('/administracion_ofertas');
		}

	}


	public function editar_perfil(UsuariosRequest $usuario_request){


        User::where('id', "=", Auth::user()->id)->update($usuario_request->except(['_token', 'foto']));

                $user=User::find(Auth::user()->id);

		if($usuario_request->hasFile('foto')) {
        	request()->file('foto')->store('users');
                   
            $filename = request()->file('foto')->hashName();
            $user->foto=$filename;

        }
        
		alert()->success('Usuario modificado con éxito.')->autoclose(2000);

		$user->save();

		 return redirect('/usuarios');
	}

	public function eliminarCV($id){
		DB::table('formacions')->where('user_id', '=', $id)->delete();
		DB::table('experiencias')->where('user_id', '=', $id)->delete();
		DB::table('idiomas')->where('user_id', '=', $id)->delete();

		alert()->success('CV eliminado correctamente')->autoclose(3000);
		return back();

	}

	public function eliminarCuenta($id){

		$inscrito= Inscribe::where('user_id', $id)->first();

		if($inscrito){
			
			alert()->error('Lo sentimos, la cuenta no ha podido ser eliminada al estar inscrita en ofertas de empleo :(');

			return back();
		}
		else{

			$user = User::where('id', $id)->first();

			$user->delete();

			alert()->success('Cuenta eliminada correctamente')->autoclose(3000);
			return redirect('/home');
		}
	
	}

	public function pdf(){
		$formacion=DB::table('formacions')->where('user_id', '=', Auth::user()->id)->get();
		$experiencia=DB::table('experiencias')->where('user_id', '=', Auth::user()->id)->get();
		$idioma=DB::table('idiomas')->where('user_id', '=', Auth::user()->id)->get();
		$user=DB::table('users')->where('id', '=', Auth::user()->id)->get();
        $pdf = PDF::loadView('pdf.CV', compact('formacion', 'experiencia', 'idioma','user'));

        return $pdf->download('CV.pdf');

	}

}
