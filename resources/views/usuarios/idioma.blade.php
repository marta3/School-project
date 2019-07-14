<div id="modalIdioma" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Completar la formación</h4>
		      </div>
		      <div class="modal-body">

				            <div class="panel panelmodal">
				                <div class="panel-heading">Idioma</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/idioma" onsubmit="formulario('btnidio')">
				                        {{ csrf_field() }}
									@include('partials.errors')
				                        <div class="form-group{{ $errors->has('idioma') ? ' has-error' : '' }}">
				                            <label for="idioma" class="col-md-2 control-label">idioma</label>

				                            <div class="col-md-6">
				                                <input id="idioma" type="text" class="form-control" name="idioma" value="{{ old('idioma') }}" required autofocus>

				                                @if ($errors->has('idioma'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('idioma') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('nivel_hablado') ? ' has-error' : '' }}">
				                            <label for="nivel_hablado" class="col-md-2 control-label">nivel_hablado</label>

				                            <div class="col-md-6">
				                                <input id="nivel_hablado" type="text" class="form-control" name="nivel_hablado" value="{{ old('nivel_hablado') }}" required>

				                                @if ($errors->has('nivel_hablado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nivel_hablado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('nivel_escrito') ? ' has-error' : '' }}">
				                            <label for="nivel_escrito" class="col-md-2 control-label">nivel_escrito</label>

				                            <div class="col-md-6">
				                                <input id="nivel_escrito" type="text" class="form-control" name="nivel_escrito" value="{{ old('nivel_escrito') }}" required>

				                                @if ($errors->has('nivel_escrito'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nivel_escrito') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('titulo_oficial') ? ' has-error' : '' }}">
				                            <label for="titulo_oficial" class="col-md-2 control-label">titulo_oficial</label>

				                            <div class="col-md-6">
				                                <input id="titulo_oficial" type="text" class="form-control" name="titulo_oficial" value="{{ old('titulo_oficial') }}" >

				                                @if ($errors->has('titulo_oficial'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('titulo_oficial') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                     
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" id="btnidio" class="btn btn-primary">
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

		<!-- MODAL MODIFICAR IDIOMA -->

		<div id="modalModificarIdioma" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modificar el idioma</h4>
		      </div>
		      <div class="modal-body">
				<div class="container">
				    <div class="row">
				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Idioma</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/modificarIdioma" onsubmit="formulario('btnmodidio')">
				                        {{ csrf_field() }}
									@include('partials.errors')
									<input id="id_usu" type="hidden" name="id" value="">
				                        <div class="form-group{{ $errors->has('idioma') ? ' has-error' : '' }}">
				                            <label for="idioma" class="col-md-2 control-label">idioma</label>

				                            <div class="col-md-6">
				                                <input id="idioma" type="text" class="form-control" name="idioma" value="" required autofocus>

				                                @if ($errors->has('idioma'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('idioma') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('nivel_hablado') ? ' has-error' : '' }}">
				                            <label for="nivel_hablado" class="col-md-2 control-label">nivel_hablado</label>

				                            <div class="col-md-6">
				                                <input id="nivel_hablado" type="text" class="form-control" name="nivel_hablado" value="" required>

				                                @if ($errors->has('nivel_hablado'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nivel_hablado') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('nivel_escrito') ? ' has-error' : '' }}">
				                            <label for="nivel_escrito" class="col-md-2 control-label">nivel_escrito</label>

				                            <div class="col-md-6">
				                                <input id="nivel_escrito" type="text" class="form-control" name="nivel_escrito" value="" required>

				                                @if ($errors->has('nivel_escrito'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nivel_escrito') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('titulo_oficial') ? ' has-error' : '' }}">
				                            <label for="titulo_oficial" class="col-md-2 control-label">titulo_oficial</label>

				                            <div class="col-md-6">
				                                <input id="titulo_oficial" type="text" class="form-control" name="titulo_oficial" value="" >

				                                @if ($errors->has('titulo_oficial'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('titulo_oficial') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" id="btnmodidio" class="btn btn-primary">
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