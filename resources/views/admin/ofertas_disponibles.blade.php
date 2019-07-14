@extends('admin.panel_admin_ofertas')

@section('content')

  <h2>OFERTAS DE EMPLEO</h2>
  <p>Listado de todas las ofertas de empleo disponibles:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th >Título</th>
        <th>descripcion</th>
        <th>empresa</th>
        <th>sector</th>
        <th>fecha_limite</th>
      </tr>
    </thead>
    <tbody>
    @forelse($ofertas as $oferta)
    <tr>
        <td id="titulo_ofe{{$oferta->id}}">{{$oferta->titulo}}</td>
        <td id="descripcion_ofe{{$oferta->id}}">{{$oferta->descripcion}}</td>
        <td id="empresa_ofe{{$oferta->id}}">{{$oferta->empresa}}</td>
        <td id="sector_ofe{{$oferta->id}}">{{$oferta->sector}}</td>
        <td id="fecha_limite_ofe{{$oferta->id}}">{{$oferta->fecha_limite}}</td>
    </tr>

     @empty
   	<tr>
        <td>Vacío</td>
        <td>Vacío</td>
        <td>Vacío</td>
        <td>Vacío</td>
        <td>Vacío</td>

      </tr>

    @endforelse
    </tbody>
  </table>



@endsection