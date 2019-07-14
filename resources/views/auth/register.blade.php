<!DOCTYPE HTML>
<html>

<head>
  <title>Bolsa empleo</title>
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Elite login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  <!-- //Meta-Tags -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <!--//fonts-->
</head>

<body>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

<body>
  <h1>Bolsa Empleo <br>Registro </h1>

  <div class="w3ls-login">
    <!-- form starts here -->
    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
      <div class="header-login">              
      <a class="formulario-header" href="{{ route('login') }}">Login</a>
      </div> 
      <div class="header-register">              
      <a class="formulario-header" href="{{ route('register') }}">Register</a>
      </div> 
      <div></div>

      <div class="agile-field-txt">
        <label for="name">
           Nombre :</label>
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="second_name">
           second_name :</label>
        <input id="second_name" type="text" class="form-control" name="second_name" required>
        @if ($errors->has('second_name'))
            <span class="help-block">
                <strong class="error">{{ $errors->first('second_name') }}</strong>
            </span>
        @endif
      </div>
      
      <div class="agile-field-txt">
        <label for="provincia">
           Provincia :</label>
          <input id="provincia" type="text" class="form-control" name="provincia" value="{{ old('provincia') }}" required>
            @if ($errors->has('provincia'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('provincia') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="localidad">
           localidad :</label>
          <input id="localidad" type="text" class="form-control" name="localidad" value="{{ old('localidad') }}" required>
            @if ($errors->has('localidad'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('localidad') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="direccion">
           direccion :</label>
          <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
            @if ($errors->has('direccion'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('direccion') }}</strong>
              </span>
          @endif
      </div>

            <div class="agile-field-txt">
        <label for="telefono">
           telefono :</label>
          <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
            @if ($errors->has('telefono'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('telefono') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="fecha_nac">
           fecha_nac :</label>
          <input id="fecha_nac" type="date" class="form-control" name="fecha_nac" value="{{ old('fecha_nac') }}" required>
            @if ($errors->has('fecha_nac'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('fecha_nac') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="email">
           email :</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="password">
           password :</label>
          <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
            @if ($errors->has('password'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="password-confirm">
           confirm :</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>

      <div class="agile-field-txt">
        <label for="dni">
           dni :</label>
          <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" require>
            @if ($errors->has('dni'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('dni') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="foto">
           foto :</label>
          <input id="foto" type="file" class="form-control" name="foto" value="{{ old('foto') }}" require>
            @if ($errors->has('foto'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('foto') }}</strong>
              </span>
          @endif
      </div>
      
      <div class="agile-field-txt">
        <label for="vehiculo">
           vehiculo :</label>
          <input type="hidden" name="vehiculo" value="0">
          <input id="vehiculo" type="checkbox" name="vehiculo" value="1" require>
            @if ($errors->has('vehiculo'))
              <span class="help-block">
                  <strong class="error">{{ $errors->first('vehiculo') }}</strong>
              </span>
          @endif
      </div>

      <div class="w3ls-login  w3l-sub">
        <input type="submit" value="Registrarse" style="background:#40359f;">
      </div>
      </form>


      <script>
        function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>

</body>

</html>