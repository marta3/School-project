@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar perfil</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="perfil/editar" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-6 col-md-offset-4"><output id="list"><img src="../storage{{Auth::user()->pathFoto() }}" class="thumb img-circle"></output></label>
                            
                            <div class="col-md-6 col-md-offset-4">
                            <label for="foto" class="btn"><span class="glyphicon glyphicon-upload"></span> Editar imagen del perfil</label>
                                <input id="foto" type="file" name="foto" style="visibility:hidden;">

                                @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

   
                          <br />
                          <output id="list"></output>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('second_name') ? ' has-error' : '' }}">
                            <label for="second_name" class="col-md-4 control-label">second_name</label>

                            <div class="col-md-6">
                                <input id="second_name" type="text" class="form-control" name="second_name" value="{{Auth::user()->second_name}}" required>

                                @if ($errors->has('second_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                            <label for="provincia" class="col-md-4 control-label">provincia</label>

                            <div class="col-md-6">
                                <input id="provincia" type="text" class="form-control" name="provincia" value="{{Auth::user()->provincia}}" required>

                                @if ($errors->has('provincia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provincia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('localidad') ? ' has-error' : '' }}">
                            <label for="localidad" class="col-md-4 control-label">localidad</label>

                            <div class="col-md-6">
                                <input id="localidad" type="text" class="form-control" name="localidad" value="{{Auth::user()->localidad}}" required>

                                @if ($errors->has('localidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('localidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{Auth::user()->direccion}}" required>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{Auth::user()->telefono}}" required>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_nac') ? ' has-error' : '' }}">
                            <label for="fecha_nac" class="col-md-4 control-label">fecha nacimiento</label>

                            <div class="col-md-6">
                                <input id="fecha_nac" type="date" class="form-control" name="fecha_nac" value="{{Auth::user()->fecha_nac}}" required>

                                @if ($errors->has('fecha_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="dni" class="col-md-4 control-label">dni</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{Auth::user()->dni}}" required autofocus>

                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('vehiculo') ? ' has-error' : '' }}">
                            <label for="vehiculo" class="col-md-4 control-label">vehiculo</label>
                            <input type="hidden" name="vehiculo" value="0">
                            <div class="col-md-6">
                            @if(Auth::user()->vehiculo == 0)
                                <input id="vehiculo" type="checkbox" name="vehiculo" value="1" >
                            @else
                                <input id="vehiculo" type="checkbox" name="vehiculo" value="1" checked>
                            @endif    

                                @if ($errors->has('vehiculo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vehiculo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


         
        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb img-circle" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
					reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('foto').addEventListener('change', archivo, false);
      </script>
@endsection