<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MODA - CAR</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?= media(); ?>/images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?= $_SESSION['userData']['nombres']; ?></h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
            <li><a href="<?= base_url(); ?>/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
          <?php } ?>

          <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>

            <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= base_url(); ?>/usuarios">Usuarios</a></li>
                <li><a href="<?= base_url(); ?>/roles">Roles</a></li>
              </ul>
            </li>
          <?php } ?>
          <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
            <li><a href="<?= base_url(); ?>/clientes"><i class="fa fa-user"></i> Clientes</a></li>
          <?php } ?>

          <?php if(!empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][6]['r'])){ ?>
            <li><a><i class="fa fa-archive"></i> Tienda <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
               <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
                <li><a href="<?= base_url(); ?>/productos">Productos</a></li>
              <?php } ?>
              <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
                <li><a href="<?= base_url(); ?>/categorias">Categorias</a></li>
              <?php } ?>
            </ul>
          </li>
          
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
          <li><a href="<?= base_url(); ?>/pedidos"><i class="fa fa-shopping-cart"></i> Pedidos</a></li>
        <?php } ?>

        <li><a href="<?= base_url(); ?>/logout"><i class="fa fa-sign-in"></i> Salir</a></li>




      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
<!--   <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div> -->
  <!-- /menu footer buttons -->
</div>
</div>


<?php require_once("navigation_admin.php"); ?> 

<!--   incluir navigation_Admin -->