<div id="modalFechasUsu" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Informe entre dos fechas determinadas</h4>
		      </div>
		      <div class="modal-body">
				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Fechas</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="informes/usuarios_seleccionados">
				                        {{ csrf_field() }}
									@include('partials.errors')
				                        <div class="form-group{{ $errors->has('fecha1') ? ' has-error' : '' }}">
				                            <label for="fecha1" class="col-md-2 control-label">De: </label>

				                            <div class="col-md-6">
				                                <input id="fecha1" type="date" class="form-control" name="fecha1" value="{{ old('fecha1') }}" required autofocus>

				                                @if ($errors->has('fecha1'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('fecha1') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('fecha2') ? ' has-error' : '' }}">
				                            <label for="fecha2" class="col-md-2 control-label">Hasta: </label>

				                            <div class="col-md-6">
				                                <input id="fecha2" type="date" class="form-control" name="fecha2" value="{{ old('fecha2') }}" required>

				                                @if ($errors->has('fecha2'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('fecha2') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" class="btn btn-primary">
				                                    Descargar informe
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