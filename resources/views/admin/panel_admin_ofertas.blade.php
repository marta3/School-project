<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Administración</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="css/estiloMenuVertAdm.css">
    <script src="js/funciones.js"></script>

</head>


 <body>
      @include('admin.modalFechas')
      @include('admin.modalFechasUsu')
      <div class="row affix-row">
          <div class="col-sm-3 col-md-2 affix-sidebar">
              <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Sidebar menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav" id="sidenav01">
              <li class="active">
                <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                <h4>
                Control Panel
                <br>
                <small>{{Auth::user()->name}} <span class="caret"></span></small>
                </h4>
                </a>
                <div class="collapse" id="toggleDemo0" style="height: 0px;">
                  <ul class="nav nav-list">
                    
              <li><a href="perfil"><span class="glyphicon glyphicon-user"></span> Editar perfil</a></li>
              <li>
                  <a href="administracion">
                     <span class="glyphicon glyphicon-share"></span> Ir a administración de usuarios
                  </a>
              </li>
              <li>
                  <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <span class="glyphicon glyphicon-log-out"></span>
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  <a href="/administracion"></a>
              </li>
                  </ul>
                </div>
              </li>
              <li class="active">
                <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                <span class="glyphicon glyphicon-briefcase"></span> Ofertas de empleo <span class="caret pull-right"></span>
                </a>
                <div class="collapse" id="toggleDemo2" style="height: 0px;">
                  <ul class="nav nav-list">
                    <li><a href="{{ route('crear_oferta') }}"><span class=" glyphicon glyphicon-list-alt"></span> Administrar ofertas</a></li>
                    <li><a href="{{ route('ofertas_disponibles') }}"><span class="glyphicon glyphicon-check"></span> Ofertas disponibles</a></li>
                  </ul>
                </div>
              </li>
        
                  

              <li class="active">
                  <a href="#" data-toggle="collapse" data-target="#toggleDemo3" class="collapse">
                      <span class="glyphicon glyphicon-list-alt"></span> Informes <span class="caret pull-right"></span>
                  </a>
                  <div class="collapse" id="toggleDemo3" style="height: 0px;">
                  <ul class="nav nav-list">
                      <li><a href="informes/usuarios_disponible"><span class="glyphicon glyphicon-list-alt"></span> Usuarios disponibles</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#modalFechas"><span class="glyphicon glyphicon-list-alt"></span> ofertas disponibles</a></li>
                      <li><a data-toggle="modal" data-target="#modalFechasUsu"><span class="glyphicon glyphicon-list-alt"></span> Usuarios seleccionados</a></li>
                  </ul>
                  </div>
              </li>


            </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
          </div>
          <div class="col-sm-9 col-md-10 affix-content">
              <div class="container">
                  
                      <div class="page-header">
          <h3><span class="glyphicon glyphicon-th-list"></span> ADMINISTRACIÓN DE OFERTAS</h3>
      </div>
          <div class="container">
                 @yield('content')
          </div>
                  
              </div>
          </div>
      </div>
    



<script src="{{asset('js/app.js')}}"></script>

</body>
