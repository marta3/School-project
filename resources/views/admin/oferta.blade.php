    <form class="form-horizontal" method="POST" action="admin-crear-oferta" onsubmit="formulario('btncrearoferta')">
        {{ csrf_field() }}

		<div id="modalOferta" class="modal fade" role="dialog">
		  	<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Crear una oferta</h4>
		        </div>
		      	<div class="modal-body">
					
				    				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Oferta</div>
			               		<div class="panel-body">
			                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
			                            <label for="titulo" class="col-md-2 control-label">Titulo</label>

			                            <div class="col-md-6">
			                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

			                                @if ($errors->has('titulo'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('titulo') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                        
			                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
			                            <label for="descripcion" class="col-md-2 control-label">descripcion</label>

			                            <div class="col-md-6">
			                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}"   required></textarea>

			                                @if ($errors->has('descripcion'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('descripcion') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">
			                            <label for="empresa" class="col-md-2 control-label">empresa</label>

			                            <div class="col-md-6">
			                                <input id="empresa" type="text" class="form-control" name="empresa" value="{{ old('empresa') }}" required>

			                                @if ($errors->has('empresa'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('empresa') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

									<div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}"">
							            <label for="sector" class="col-md-2 control-label">Sector</label>
							            <div class="col-md-6">
							            <select id="sector" class="form-control" name="sector" required>
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



			                        <div class="form-group{{ $errors->has('fecha_limite') ? ' has-error' : '' }}">
			                            <label for="fecha_limite" class="col-md-2 control-label">fecha_limite</label>

			                            <div class="col-md-6">
			                                <input id="fecha_limite" type="date" class="form-control" name="fecha_limite" value="{{ old('fecha_limite') }}" required>

			                                @if ($errors->has('fecha_limite'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('fecha_limite') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="col-md-6 col-md-offset-4">
			                            <button id="btncrearoferta">
			                                    Añadir
			                                
			                                </button>
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
</form>
		<!-- MODAL MODIFICAR OFERTA -->

		<div id="modalModificarOferta" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <form class="form-horizontal" method="POST" action="admin-modificar-oferta">
                {{ csrf_field() }}
			@include('partials.errors')
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modificar la oferta</h4>
		      </div>
		      <div class="modal-body">

				        
				            <div class="panel panelmodal">
				                <div class="panel-heading">Oferta</div>
								
				                <div class="panel-body">
				                    
									<input id="id_oferta" type="hidden" name="id" value="">
				                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
				                            <label for="titulo" class="col-md-2 control-label">Titulo</label>

				                            <div class="col-md-6">
				                                <input id="titulo" type="text" class="form-control" name="titulo" value="" required autofocus>

				                                @if ($errors->has('titulo'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('titulo') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
				                            <label for="descripcion" class="col-md-2 control-label">descripcion</label>

				                            <div class="col-md-6">
				                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" value="" required></textarea>

				                                @if ($errors->has('descripcion'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('descripcion') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>

				                        <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">
				                            <label for="empresa" class="col-md-2 control-label">empresa</label>

				                            <div class="col-md-6">
				                                <input id="empresa" type="text" class="form-control" name="empresa" value="" required>

				                                @if ($errors->has('empresa'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('empresa') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>


									<div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}"">
							            <label for="sector" class="col-md-2 control-label">Sector</label>
							            <div class="col-md-6">
							            <select id="sector" class="form-control" name="sector" value="" required>
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

				                        <div class="form-group{{ $errors->has('fecha_limite') ? ' has-error' : '' }}">
				                            <label for="fecha_limite" class="col-md-2 control-label">fecha_limite</label>

				                            <div class="col-md-6">
				                                <input id="fecha_limite" type="date" class="form-control" name="fecha_limite" value="{{ old('fecha_limite') }}">

				                                @if ($errors->has('fecha_limite'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('fecha_limite') }}</strong>
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
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>