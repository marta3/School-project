<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <h2 style="text-align: center;">Usuarios Disponibles</h2>          
  <table class="table table-hover col-md-offset-1">
    <thead>
      <tr>
        <th >Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Sector</th>
      </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->second_name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->telefono}}</td>
      <td>{{$user->sector}}</td>
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
</html>

