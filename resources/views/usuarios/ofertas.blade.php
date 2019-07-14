@extends('layouts.app')

@include('layouts.menuVerticalUsu')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@forelse($ofertasInscritas as $oferta_ins)
 <div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="offer offer-default">
					<div class="shape">
						<div class="shape-text">
							{{$oferta_ins->sector}}							
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							{{$oferta_ins->titulo}}
						</h3>
						<p>
							{{$oferta_ins->descripcion}}
						</p>
						<button type="button" class="btn btn-danger btn-lg"><a href="cancelar_inscripcion/{{$oferta_ins->idIns}}">Cancelar inscripción</a></button>
					</div>
				</div>
			</div>
        </div>
	</div>

@empty
@endforelse


	

		@forelse($ofertas as $oferta)
		
		
		
		 <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="offer offer-default">
						<div class="shape">
							<div class="shape-text">
								{{$oferta->sector}}							
							</div>
						</div>
						<div class="offer-content">
							<h3 class="lead">
								{{$oferta->titulo}}
							</h3>
							<p>
								{{$oferta->descripcion}}
							</p>
							<form action="inscribirse/{{$oferta->id}}" onsubmit="formulario('btnoferta')">
							<input type="submit" id="btnoferta" class="btn btn-warning btn-lg" value="Inscribirse">
							</form>
						</div>
					</div>
				</div>
	        </div>
		</div>


		@empty
		<p style="text-align: center;">No hay ofertas disponibles en este momento</p>

		
		@endforelse

@endsection

