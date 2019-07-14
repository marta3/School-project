  @extends('admin.panel_admin_ofertas')
  @extends('admin.modalCorreos')
  @section('content')
  <h2>Usuarios inscritos</h2>
  <p>Listado de todos los usuarios inscritos:</p>   
           @include('partials.errors')
          @if(session('message'))
 <div class="alert alert-{{ session('message')[0] }}">
 {{ session('message')[1] }}
 </div>
 @endif

  <form method="post" action="admin_usuarios_inscritos/exportar">
  {{ csrf_field() }}

  <button class="btn btn-info" type="submit">Exportar curriculums seleccionados</button>
  <button type="button" class="modalMandarcorreos btn btn-info" data-toggle="modal" data-target="#modalCorreos">Enviar mail a la empresa</button>    
  <table class="table table-hover">
    <thead>
      <tr>
        <th >Nombre y apellidos</th>
        <th>Seleccionado</th>
        <th><input type="checkbox" onClick="seleccionar_todo(this)"/>Exportar currículum</th>
      </tr>
    </thead>
    <tbody>
    
    @forelse($usuarios as $usuario)
    <input type="hidden" name="idOferta" value="{{$usuario->idOfe}}">
    <tr>
      <td id="">{{$usuario->name}} {{$usuario->second_name}}</td>
      @if($usuario->seleccionado==0)
      <td><input type="checkbox" onclick='window.location.assign("admin_usuario_seleccionado/{{$usuario->idIns}}")'/></td>
      @else
      <td><input type="checkbox" onclick='window.location.assign("admin_usuario_seleccionado/{{$usuario->idIns}}")' checked/></td>
      @endif
      <td><input type="checkbox" name=usuarios[] value="{{$usuario->idUsu}}" /></td>
    </tr>
    
    @empty
   	<tr>
        <td>No hay usuarios inscritos</td>
    </tr>
    
    @endforelse
    </tbody>
</table>

</form>

<script language="JavaScript">
function seleccionar_todo(source) {
  checkboxes = document.getElementsByName('usuarios[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
    @endsection