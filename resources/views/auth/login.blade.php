<!DOCTYPE html>
<html lang="es">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="/login" method="post">
            {!! csrf_field() !!}
            <h1>Inicio de Sesión</h1>
            <div>
              <input type="text" class="form-control" placeholder="Usuario" name="email">
              {!! $errors->first('email', '<span class="error">:message</span>')  !!}
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Contraseña">
              {!! $errors->first('password', '<span class="error">:message</span>')  !!}
            </div>
            <div>
              <br>
              <input type="submit" class="btn btn-default" value="Ingresar">
              <a class="reset_pass" href="">Olvidó su contraseña?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">    
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-home" style="font-size: 26px;"></i> San Vicente Ferrer</h1>   
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

<script src="js/jquery.min.js"></script>

</html>
