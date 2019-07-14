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
  <h1>Bolsa Empleo <br>Login </h1>

  <div class="w3ls-login">
    <!-- form starts here -->
    <form method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}
      <div class="header-login">              
      <a class="formulario-header" href="{{ route('login') }}">Login</a>
      </div> 
      <div class="header-register">              
      <a class="formulario-header" href="{{ route('register') }}">Register</a>
      </div> 
      <div></div>
      <div class="agile-field-txt">
        <label for="email">
          <i class="fa fa-user" aria-hidden="true"></i> E-Mail Address :</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>

      <div class="agile-field-txt">
        <label for="password">
          <i class="fa fa-lock" aria-hidden="true"></i> password :</label>
        <input id="password" type="password" class="form-control" name="password" required>
        <div class="agile_label">
          <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
          <label class="check" for="check3">Show password</label>
        </div>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

            <div class="w3ls-login  w3l-sub">
        <input type="submit" value="Login" style="background:#40359f;">
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