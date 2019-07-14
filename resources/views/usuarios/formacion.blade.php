
		<div id="modalFormacion" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Completar la formación</h4>
		      </div>
		      <div class="modal-body">

				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Formacion</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/formacion" enctype="multipart/form-data" onsubmit="formulario('btnformac')">
				                        {{ csrf_field() }}
									@include('partials.errors')
										<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}"">
								            <label for="titulo" class="col-md-2 control-label">Titulo</label>
								            <div class="col-md-6">
								            <select id="titulo" class="form-control" name="titulo" required>
								                @foreach($titulos as $titulo)
								                <option>{{$titulo->nombre}}</option>
								                @endforeach
								            </select>

								            
				                                @if ($errors->has('sector'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('sector') }}</strong>
				                                    </span>
				                                @endif
								            </div>
								        </div>
				                        
				                        <div class="form-group{{ $errors->has('grado') ? ' has-error' : '' }}">
				                            <label for="grado" class="col-md-2 control-label">grado</label>

				                            <div class="col-md-6">
				                                <input id="grado" type="text" class="form-control" name="grado" value="{{ old('grado') }}" required>

				                                @if ($errors->has('grado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('grado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('centro') ? ' has-error' : '' }}">
				                            <label for="centro" class="col-md-2 control-label">centro</label>

				                            <div class="col-md-6">
				                                <input id="centro" type="text" class="form-control" name="centro" value="{{ old('centro') }}" required>

				                                @if ($errors->has('centro'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('centro') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('finalizado') ? ' has-error' : '' }}">
				                            <label for="finalizado" class="col-md-2 control-label">finalizado</label>

				                            <div class="col-md-6">
				                                <input type="hidden" name="finalizado" value="0">
				                                <input type="checkbox" name="finalizado" value="1">


				                                @if ($errors->has('finalizado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('finalizado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


				                        <div class="form-group{{ $errors->has('anyo_finalizacion') ? ' has-error' : '' }}">
				                            <label for="anyo_finalizacion" class="col-md-2 control-label">anyo_finalizacion</label>

				                            <div class="col-md-6">
				                                <input id="anyo_finalizacion" type="text" class="form-control" name="anyo_finalizacion" value="{{ old('anyo_finalizacion') }}">

				                                @if ($errors->has('anyo_finalizacion'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('anyo_finalizacion') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" id="btnformac" class="btn btn-primary">
				                                    Añadir
				                                </button>
				                            </div>
				                        </div>
				                    </form>
				                </div>
				            </div>
				               
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- MODAL MODIFICAR FORMACION -->

		<div id="modalModificarFormacion" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modificar la formación</h4>
		      </div>
		      <div class="modal-body">
				<div class="container">
				    <div class="row">
				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Formacion</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/modificarFormacion">
				                        {{ csrf_field() }}
									@include('partials.errors')
									<input id="id_usu" type="hidden" name="id" value="">
										<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}"">
								            <label for="titulo" class="col-md-2 control-label">Titulo</label>
								            <div class="col-md-6">
								            <select id="titulo" class="form-control" name="titulo" required>
								                @foreach($titulos as $titulo)
								                <option>{{$titulo->nombre}}</option>
								                @endforeach
								            </select>

								            
				                                @if ($errors->has('sector'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('sector') }}</strong>
				                                    </span>
				                                @endif
								            </div>
								        </div>
				                        
				                        <div class="form-group{{ $errors->has('grado') ? ' has-error' : '' }}">
				                            <label for="grado" class="col-md-2 control-label">grado</label>

				                            <div class="col-md-6">
				                                <input id="grado" type="text" class="form-control" name="grado" value="" required>

				                                @if ($errors->has('grado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('grado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('centro') ? ' has-error' : '' }}">
				                            <label for="centro" class="col-md-2 control-label">centro</label>

				                            <div class="col-md-6">
				                                <input id="centro" type="text" class="form-control" name="centro" value="" required>

				                                @if ($errors->has('centro'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('centro') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('finalizado') ? ' has-error' : '' }}">
				                            <label for="finalizado" class="col-md-2 control-label">finalizado</label>

				                            <div class="col-md-6">
				                            
				                                <input type="hidden" name="finalizado" value="0">
				                                <input id="fin" type="checkbox" name="finalizado" value="1">

				                                @if ($errors->has('finalizado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('finalizado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('anyo_finalizacion') ? ' has-error' : '' }}">
				                            <label for="anyo_finalizacion" class="col-md-2 control-label">anyo_finalizacion</label>

				                            <div class="col-md-6">
				                                <input id="anyo_finalizacion" type="text" class="form-control" name="anyo_finalizacion" value="{{ old('anyo_finalizacion') }}">

				                                @if ($errors->has('anyo_finalizacion'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('anyo_finalizacion') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" class="btn btn-primary">
				                                    Modificar
				                                </button>
				                            </div>
				                        </div>
				                    </form>
				                </div>
				            </div>
				        
				    </div>
				</div>	       
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>