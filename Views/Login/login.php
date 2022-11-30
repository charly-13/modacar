<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Carlos Cruz C">
  <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
  <title><?= $data['page_tag']; ?></title>

  <!-- Bootstrap -->
  <link href="<?= media() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= media() ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= media() ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= media() ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= media() ?>/build/css/custom.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">


<link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">


</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div id="divLoading" >
        <div>
          <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
      </div>
      <div class="animate form login_form">
        <section class="login_content">
          <form class="login-form" name="formLogin" id="formLogin" action="">
            <h1>Login Form</h1>
            <div>
              <input id="txtEmail" name="txtEmail" type="text" class="form-control" placeholder="Email"  />
            </div>
            <div>
              <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Contraseña"  />
            </div>
            <div>
              <!-- <a class="btn btn-default submit" href="index.html">Iniciar Sesión</a> -->
              <button type="submit" class="btn btn-default submit">Iniciar Sesión</button>
              <a href="#signup" class="to_register">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">¿Nuevo en el sitio?
                <a href="#signup" class="to_register"> Crear una cuenta </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> <?= $data['page_title']; ?>!</h1>
                <p>©2022 Todos los derechos reservados. Gentelella Alela! es una plantilla de Bootstrap 4. Privacidad y Términos</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form id="formRecetPass" name="formRecetPass">
            <h1>Create Account</h1>
            <div>
              <input id="txtEmailReset" name="txtEmailReset" type="text" class="form-control" placeholder="Username"  />
            </div>
            <div>
              <input id="txtPassword" name="txtPassword" type="email" class="form-control" placeholder="Email"  />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password"  />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> <?= $data['page_title']; ?>!</h1>
                <p>©2022 Todos los derechos reservados. Gentelella Alela! es una plantilla de Bootstrap 4. Privacidad y Términos</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
<script>
  const base_url = "<?= base_url(); ?>";
</script>

<script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</html>
