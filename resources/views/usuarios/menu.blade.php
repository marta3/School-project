@extends('layouts.app')
@include('layouts.menuVerticalUsu')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        <section>
		
		<button class="btn btn-info" ><a href="{{ route('CV.pdf') }}"> <span class="glyphicon glyphicon-download-alt"></span> Exportar CV a PDF</a></button>
 @if(session('message'))
 <div class="alert alert-{{ session('message')[0] }}">
 {{ session('message')[1] }}
 </div>
 @endif

 @include('partials.errors')

<!-- Modal Formacion -->

	
	<button type="button" class="modalInsertarFormacion btn btn-info" data-toggle="modal" data-target="#modalFormacion"><span class="glyphicon glyphicon-pencil"></span> RELLENAR FORMACION</button>
	<button type="button" class="modalInsertarExperiencia btn btn-info" data-toggle="modal" data-target="#modalExperiencia"><span class="glyphicon glyphicon-pencil"></span> RELLENAR EXPERIENCIA</button>
	<button type="button" class="modalInsertarIdioma btn btn-info" data-toggle="modal" data-target="#modalIdioma"><span class="glyphicon glyphicon-pencil"></span> RELLENAR IDIOMA</button>
	<button class="btn btn-danger" onclick="borrarCV({{Auth::user()->id}})" ><span class="glyphicon glyphicon-trash"></span> Eliminar CV</button>
		</section>
				@include('usuarios.experiencia')
@include('usuarios.formacion')
<section>
		<h3>FORMACIONES</h3>
		@forelse($formacion as $formac)
		
		
		<div class="curriculum">
		<label class="enunciado">Título </label><label id="titulo_usu{{$formac->id}}" class="result">{{$formac->titulo}}</label><br>
		<label class="enunciado">Grado</label></label><label id="grado_usu{{$formac->id}}">{{$formac->grado}}</label><br>
		<label class="enunciado">Centro</label></label><label id="centro_usu{{$formac->id}}">{{$formac->centro}}</label><br>

		@if($formac->finalizado==1)
		<label class="enunciado">Finalizado     </label></label><label id="finalizado_usu{{$formac->id}}">Si</label><br>
		@else
		<label class="enunciado">Finalizado     </label></label><label id="finalizado_usu{{$formac->id}}">No</label><br>
		@endif
		<label class="enunciado">Año finalización</label></label><label id="anyo_finalizacion_usu{{$formac->id}}">{{$formac->anyo_finalizacion}}</label><br>
		<div class="botones">
		<button type="button" data-id="{{$formac->id}}" class="modalModificar btn btn-warning btn-lg" data-toggle="modal" data-target="#modalModificarFormacion"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
		<button class="btn btn-warning btn-lg"><a id="{{$formac->id}}"  href="formacion/delete/{{$formac->id}}"><span class="glyphicon glyphicon-trash"></span> Eliminar formación</a></button>
		</div>
		</div>
		
		@empty
		<p></p>

		
		@endforelse
</section>


<!-- MODAL EXPERIENCIA -->

<section>
	
	


		<h3>EXPERIENCIAS</h3>
		@forelse($experiencia as $exp)
		<div class="curriculum">
		<label class="enunciado">Puesto </label><label id="puesto_usu{{$exp->id}}">{{$exp->puesto}}</label><br>
		<label class="enunciado">Función realizada </label><label id="funcion_realizada_usu{{$exp->id}}">{{$exp->funcion_realizada}}</label><br>
		<label class="enunciado">Empresa </label><label id="empresa_usu{{$exp->id}}">{{$exp->empresa}}</label><br>
		<label class="enunciado">Sector empresa </label><label id="sector_empresa_usu{{$exp->id}}">{{$exp->sector_empresa}}</label><br>
		<label class="enunciado">Mes y año de inicio </label><label id="mes_anyo_inicio_usu{{$exp->id}}">{{$exp->mes_anyo_inicio}}</label><br>
		<label class="enunciado">Mes y año de fin </label><label id="mes_anyo_fin_usu{{$exp->id}}">{{$exp->mes_anyo_fin}}</label><br>
		<div class="botones">
		<button type="button" data-id="{{$exp->id}}" class="modalModifExperiencia btn btn-warning btn-lg" data-toggle="modal" data-target="#modalModificarExperiencia"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
		<button class="btn btn-warning btn-lg"><a id="{{$exp->id}}"  href="experiencia/delete/{{$exp->id}}"><span class="glyphicon glyphicon-trash"></span> Eliminar experiencia</a></button>
		</div>
		</div>
		@empty
		<p></p>
		@endforelse


</section>

<!-- MODAL IDIOMA -->

<section>
	
	

		
@include('usuarios.idioma')
		<h3>IDIOMAS</h3>
		@forelse($idioma as $idio)
		<div class="curriculum">
		<label class="enunciado">Idioma </label><label id="idioma_usu{{$idio->id}}">{{$idio->idioma}}</label><br>
		<label class="enunciado">Nivel hablado </label><label id="nivel_hablado_usu{{$idio->id}}">{{$idio->nivel_hablado}}</label><br>
		<label class="enunciado">Nivel escrito </label><label id="nivel_escrito_usu{{$idio->id}}">{{$idio->nivel_escrito}}</label><br>
		<label class="enunciado">Título oficial </label><label id="titulo_oficial_usu{{$idio->id}}">{{$idio->titulo_oficial}}</label><br>
		<div class="botones">
		<button type="button" data-id="{{$idio->id}}" class="modalModiIdioma btn btn-warning btn-lg" data-toggle="modal" data-target="#modalModificarIdioma"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
		<button class="btn btn-warning btn-lg"><a id="{{$idio->id}}"  href="idioma/delete/{{$idio->id}}"><span class="glyphicon glyphicon-trash"></span> Eliminar idioma</a></button>
		</div>
		</div>
		@empty
		<p></p>
		@endforelse

</section>

@endsection

