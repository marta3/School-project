<div id="modalCorreos" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Envío de mail a la empresa</h4>
		      </div>
		      <div class="modal-body">

				        
				            <div class="panel panelmodal">
				                
								
				                <div class="panel-body">
				                    <form class="form-horizontal" method="post" action="admin/curriculums_mail" enctype="multipart/form-data">
				                        {{ csrf_field() }}
									@include('partials.errors')
				                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label for="email" class="col-md-2 control-label">Email </label>

				                            <div class="col-md-6">
				                                <input id="email" type="text"  name="email" value="{{ old('email') }}" required autofocus>

				                                @if ($errors->has('email'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        

				                        <div class="form-group{{ $errors->has('curriculums') ? ' has-error' : '' }}">
				                            <label for="curriculums" class="col-md-2 control-label">Curriculums: </label>

				                            <div class="col-md-6">
				                                <input id="curriculums" type="file"  name="curriculums[]" value="{{ old('curriculums') }}" multiple required>

				                                @if ($errors->has('curriculums'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('curriculums') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>



				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" class="btn btn-primary">
				                                    Enviar currículums
				                                </button>
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