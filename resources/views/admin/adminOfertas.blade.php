@extends('admin.panel_admin_ofertas')

@include('admin.oferta')
@section('content')

         @include('partials.errors')
          @if(session('message'))
 <div class="alert alert-{{ session('message')[0] }}">
 {{ session('message')[1] }}
 </div>
 @endif
<button type="button" class="modalInsertarOferta btn btn-info btn-lg" data-toggle="modal" data-target="#modalOferta"> <span class="glyphicon glyphicon-plus"></span> Nueva Oferta</button>
  <h2>OFERTAS DE EMPLEO</h2>
  <p>Listado de todas las ofertas de empleo:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Título</th>
        <th>descripcion</th>
        <th>empresa</th>
        <th>sector</th>
        <th>fecha_limite</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($ofertas as $oferta)
      <tr>
        <td id="titulo_ofe{{$oferta->id}}">{{$oferta->titulo}}</td>
        <td id="descripcion_ofe{{$oferta->id}}">{{$oferta->descripcion}}</td>
        <td id="empresa_ofe{{$oferta->id}}">{{$oferta->empresa}}</td>
        <td id="sector_ofe{{$oferta->id}}">{{$oferta->sector}}</td>
        <td id="fecha_limite_ofe{{$oferta->id}}">{{$oferta->fecha_limite}}</td>
        <td><button type="button" data-id="{{$oferta->id}}" class="modalModificarOferta btn btn-default" data-toggle="modal" data-target="#modalModificarOferta">Modificar</button></td>
        <td><button class="btn btn-default"><a href="admin_usuarios_inscritos{{$oferta->id}}" style="text-decoration: none; color:black">Usuarios inscritos</a></button></td>
        <td><button class="btn btn-default"><a href="admin_eliminar_oferta/{{$oferta->id}}" style="text-decoration: none; color:black">Eliminar</a></button></td>
      </tr>
       @endforeach
    </tbody>
  </table>

@endsection
