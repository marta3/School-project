<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>¿Quieres eliminar la cuenta?</h2>
    <p>Por favor, haga click en el siguiente enlace para eliminar su cuenta:</p>

    <a href="{{ url('/eliminar_usuario/' . $id) }}">
        Clic para eliminar.
    </a>
</body>
</html>