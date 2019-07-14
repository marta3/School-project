<div id="modalExperiencia" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Completar la experiencia</h4>
		      </div>
		      <div class="modal-body">
				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Experiencia</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/experiencia" onsubmit="formulario('btnexp')">
				                        {{ csrf_field() }}
									@include('partials.errors')
				                        <div class="form-group{{ $errors->has('puesto') ? ' has-error' : '' }}">
				                            <label for="puesto" class="col-md-2 control-label">Puesto</label>

				                            <div class="col-md-6">
				                                <input id="puesto" type="text" class="form-control" name="puesto" value="{{ old('puesto') }}" required autofocus>

				                                @if ($errors->has('puesto'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('puesto') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('funcion_realizada') ? ' has-error' : '' }}">
				                            <label for="funcion_realizada" class="col-md-2 control-label">Función realizada</label>

				                            <div class="col-md-6">
				                                <input id="funcion_realizada" type="text" class="form-control" name="funcion_realizada" value="{{ old('funcion_realizada') }}" required>

				                                @if ($errors->has('funcion_realizada'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('funcion_realizada') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">
				                            <label for="empresa" class="col-md-2 control-label">Empresa</label>

				                            <div class="col-md-6">
				                                <input id="empresa" type="text" class="form-control" name="empresa" value="{{ old('empresa') }}" required>

				                                @if ($errors->has('empresa'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('empresa') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


				                        <div class="form-group{{ $errors->has('sector_empresa') ? ' has-error' : '' }}"">
								            <label for="sector_empresa" class="col-md-2 control-label">Sector_empresa</label>
								            <div class="col-md-6">
								            <select id="sector_empresa" class="form-control" name="sector_empresa" required>
								                @foreach($sectores as $sector)
								                <option>{{$sector->nombre}}</option>
								                @endforeach
								            </select>

								            
				                                @if ($errors->has('sector'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('sector') }}</strong>
				                                    </span>
				                                @endif
								            </div>
							        	</div>

				                        <div class="form-group{{ $errors->has('mes_anyo_inicio') ? ' has-error' : '' }}">
				                            <label for="mes_anyo_inicio" class="col-md-2 control-label">Mes y año inicio</label>

				                            <div class="col-md-6">
				                                <input id="mes_anyo_inicio" type="text" class="form-control" name="mes_anyo_inicio" placeholder="MM/AAAA p.e(13/1997)" value="{{ old('mes_anyo_inicio') }}">

				                                @if ($errors->has('mes_anyo_inicio'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('mes_anyo_inicio') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


				                        <div class="form-group{{ $errors->has('mes_anyo_fin') ? ' has-error' : '' }}">
				                            <label for="mes_anyo_fin" class="col-md-2 control-label">Mes y año fin</label>

				                            <div class="col-md-6">
				                                <input id="mes_anyo_fin" type="text" class="form-control" name="mes_anyo_fin" placeholder="MM/AAAA p.e(13/1997)" value="{{ old('mes_anyo_fin') }}">

				                                @if ($errors->has('mes_anyo_fin'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('mes_anyo_fin') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" id="btnexp" class="btn btn-primary">
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

		<!-- MODAL MODIFICAR EXPERIENCIA -->

		<div id="modalModificarExperiencia" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modificar la experiencia</h4>
		      </div>
		      <div class="modal-body">
				<div class="container">
				    <div class="row">
				        
				        <div class="panel panelmodal">
				                <div class="panel-heading">Experiencia</div>
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="POST" action="usuarios/modificarExperiencia" onsubmit="formulario('btnmodexp')">
				                        {{ csrf_field() }}
									@include('partials.errors')
									<input id="id_usu" type="hidden" name="id" value="">
				                        <div class="form-group{{ $errors->has('puesto') ? ' has-error' : '' }}">
				                            <label for="puesto" class="col-md-2 control-label">Puesto</label>

				                            <div class="col-md-6">
				                                <input id="puesto" type="text" class="form-control" name="puesto" value="" required autofocus>

				                                @if ($errors->has('puesto'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('puesto') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('funcion_realizada') ? ' has-error' : '' }}">
				                            <label for="funcion_realizada" class="col-md-2 control-label">Función realizada</label>

				                            <div class="col-md-6">
				                                <input id="funcion_realizada" type="text" class="form-control" name="funcion_realizada" value="" required>

				                                @if ($errors->has('funcion_realizada'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('funcion_realizada') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">
				                            <label for="empresa" class="col-md-2 control-label">Empresa</label>

				                            <div class="col-md-6">
				                                <input id="empresa" type="text" class="form-control" name="empresa" value="" required>

				                                @if ($errors->has('empresa'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('empresa') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>



				                        <div class="form-group{{ $errors->has('sector_empresa') ? ' has-error' : '' }}"">
								            <label for="sector_empresa" class="col-md-2 control-label">Sector_empresa</label>
								            <div class="col-md-6">
								            <select id="sector_empresa" class="form-control" name="sector_empresa" value="" required>
								                @foreach($sectores as $sector)
								                <option>{{$sector->nombre}}</option>
								                @endforeach
								            </select>

								            
				                                @if ($errors->has('sector'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('sector') }}</strong>
				                                    </span>
				                                @endif
								            </div>
							        	</div>

				                        <div class="form-group{{ $errors->has('mes_anyo_inicio') ? ' has-error' : '' }}">
				                            <label for="mes_anyo_inicio" class="col-md-2 control-label">Mes y año inicio</label>

				                            <div class="col-md-6">
				                                <input id="mes_anyo_inicio" type="text" class="form-control" name="mes_anyo_inicio" value="">

				                                @if ($errors->has('mes_anyo_inicio'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('mes_anyo_inicio') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


				                        <div class="form-group{{ $errors->has('mes_anyo_fin') ? ' has-error' : '' }}">
				                            <label for="mes_anyo_fin" class="col-md-2 control-label">Mes y año fin</label>

				                            <div class="col-md-6">
				                                <input id="mes_anyo_fin" type="text" class="form-control" name="mes_anyo_fin" value="">

				                                @if ($errors->has('mes_anyo_fin'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('mes_anyo_fin') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" id="btnmodexp" class="btn btn-primary">
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