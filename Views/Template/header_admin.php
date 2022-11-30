
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $data['page_tag'] ?></title>

  <!-- Bootstrap -->
  <link href="<?= media(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= media(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= media(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= media(); ?>/build/css/custom.min.css" rel="stylesheet">

  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="<?= media(); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="http://localhost/tienda_virtual/Assets/css/bootstrap-select.min.css"> 
  <link rel="stylesheet" type="text/css" href="http://localhost/tienda_virtual/Assets/js/datepicker/jquery-ui.min.css"> 

  <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/sweetalert.css">
</head>

<body class="nav-md">
  <div id="divLoading" >
    <div>
      <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
  </div>
  <div class="container body">
    <div class="main_container">

      <?php require_once("nav_admin.php"); ?> 

     <!--    incluir nav admin
         -->