<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <h2 style="text-align: center;">Ofertas Disponibles</h2>          
  <table class="table table-hover col-md-offset-1">
    <thead>
      <tr>
        <th >Título</th>
        <th>Descripción</th>
        <th>Empresa</th>
        <th>Sector</th>
        <th>Fecha Límite</th>
      </tr>
    </thead>
    <tbody>
    @forelse($ofertas as $oferta)
    <tr>
      <td>{{$oferta->titulo}}</td>
      <td>{{$oferta->descripcion}}</td>
      <td>{{$oferta->empresa}}</td>
      <td>{{$oferta->sector}}</td>
      <td>{{$oferta->fecha_limite}}</td>
    </tr>
    </tbody>
    @empty
   	<tr>
        <td>No hay ofertas disponibles</td>
    </tr>
    </tbody>
    @endforelse
</table>	
</body>
</html>