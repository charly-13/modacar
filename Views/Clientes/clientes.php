    <?php 
    headerAdmin($data); 
    getModal('modalClientes',$data);
    ?>
    <!-- page content -->
    <div id="contentAjax"></div> 
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
<!--       <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
      </div> -->
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2><?= $data['page_title'] ?> </h2>
            &nbsp; &nbsp; &nbsp;
            <?php if($_SESSION['permisosMod']['w']){ ?>
              <button class="btn btn-info btn-sm" type="button" onclick="openModal();" ><i class="fas fa fa-plus-circle"></i> Nuevo</button>
            <?php } ?>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
<!--                   <p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                  </p> -->
                  <table id="tableClientes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Identificación</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php footerAdmin($data); ?>
