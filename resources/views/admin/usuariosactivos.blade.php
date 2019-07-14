@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/styles.css">

<div id="content" class="col-lg-10 col-lg-offset-1">
  

  <header id="header" class="col-lg-12">
    <h1>
      ADMIN
    </h1>
  </header>

  <section id="main" class="col-lg-12">
    <!-- Componente actual -->
    <h3>Usuarios</h3>
    @forelse($usuarios as $usuario)
      <div>
          <span>{{$usuario->email}}</span> 
          <a id="{{$usuario->email}}" href="admin/verificar/{{$usuario->email}}/{{$usuario->confirmation_code}}">Verificar usuario</a>
      </div>

    @empty
    <div>No hay usuarios</div>  
    @endforelse
  </section>
@endsection
  <footer class="col-lg-12">
    <p>Bolsa empleo - Marta Armario</p>
  </footer>
</div>