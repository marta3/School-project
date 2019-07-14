<html>

<head>

</head>	
	@forelse($user as $usuario)
	<label ><strong>Nombre y apellidos: </strong></label><label> {{$usuario->name}} {{$usuario->second_name}}</label>
	@empty
	<p></p>
	@endforelse
		<h5 style="color:blue;">FORMACION</h5>
		@forelse($formacion as $formac)
	<section style="margin-left: 15em;">
		<label class="enunciado">Título     </label><label id="titulo_usu{{$formac->id}}" class="result">{{$formac->titulo}}</label><br>
		<label class="enunciado">Grado     </label></label><label id="grado_usu{{$formac->id}}">{{$formac->grado}}</label><br>
		<label class="enunciado">Centro     </label></label><label id="centro_usu{{$formac->id}}">{{$formac->centro}}</label><br>
		@if($formac->finalizado==1)
		<label class="enunciado">Finalizado     </label></label><label id="finalizado_usu{{$formac->id}}">Si</label><br>
		@else
		<label class="enunciado">Finalizado     </label></label><label id="finalizado_usu{{$formac->id}}">No</label><br>
		@endif
		<label class="enunciado">Finalizado     </label></label><label id="finalizado_usu{{$formac->id}}">{{$formac->finalizado}}</label><br>
		<label class="enunciado">Año finalización     </label></label><label id="anyo_finalizacion_usu{{$formac->id}}">{{$formac->anyo_finalizacion}}</label><br>

</section>
<hr>
		@empty
		<p class="result">Ninguna formación</p>
		
		@endforelse



<!-- MODAL EXPERIENCIA -->
	<h5 style="color:blue;">EXPERIENCIA</h5>
	
		@forelse($experiencia as $exp)
		<section style="margin-left: 15em;">

		<label class="enunciado">Puesto </label><label id="puesto_usu{{$exp->id}}">{{$exp->puesto}}</label><br>
		<label class="enunciado">Función realizada </label><label id="funcion_realizada_usu{{$exp->id}}">{{$exp->funcion_realizada}}</label><br>
		<label class="enunciado">Empresa </label><label id="empresa_usu{{$exp->id}}">{{$exp->empresa}}</label><br>
		<label class="enunciado">Sector empresa </label><label id="sector_empresa_usu{{$exp->id}}">{{$exp->sector_empresa}}</label><br>
		<label class="enunciado">Mes y año de inicio </label><label id="mes_anyo_inicio_usu{{$exp->id}}">{{$exp->mes_anyo_inicio}}</label><br>
		<label class="enunciado">Mes y año de fin </label><label id="mes_anyo_fin_usu{{$exp->id}}">{{$exp->mes_anyo_fin}}</label><br>
</section>
<hr>
		@empty
		<p class="result">Ninguna experiencia</p>
		@endforelse




<!-- MODAL IDIOMA -->

	
		<h5 style="color:blue;">IDIOMA</h5>

		@forelse($idioma as $idio)
<section style="margin-left: 15em;">
		
		<label class="enunciado">Idioma </label><label id="idioma_usu{{$idio->id}}">{{$idio->idioma}}</label><br>
		<label class="enunciado">Nivel hablado </label><label id="nivel_hablado_usu{{$idio->id}}">{{$idio->nivel_hablado}}</label><br>
		<label class="enunciado">Nivel escrito </label><label id="nivel_escrito_usu{{$idio->id}}">{{$idio->nivel_escrito}}</label><br>
		<label class="enunciado">Título oficial </label><label id="titulo_oficial_usu{{$idio->id}}">{{$idio->titulo_oficial}}</label><br>
		</section>
		<hr>
		@empty
		<p class="result">Ningun idioma</p>
		@endforelse




</html>