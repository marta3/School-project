<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <h2 style="text-align: center;">Usuarios seleccionados</h2>          
  <table class="table table-hover col-md-offset-1">
    <thead>
      <tr>
        <th>Empresa</th>
        <th>Nombre usuario</th>
        <th>Apellidos</th>
        <th>Sector</th>
      </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
    <tr>
      <td>{{$user->empresa}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->second_name}}</td>
      <td>{{$user->sectorEmp}}</td>
    </tr>
    </tbody>
    @empty
   	<tr>
        <td>No hay usuarios disponibles</td>
    </tr>
    </tbody>
    @endforelse
</table>	
</body>
</html>'empresa', 'name', 'second_name', 'ofertas.sector as sectorEmp')