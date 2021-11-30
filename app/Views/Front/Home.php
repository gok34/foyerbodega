<?= $this->extend('Front/layout/main') ?>
<?= $this->section('title') ?>
Contabilidad
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <h3>Ordenes de Compra</h3>
  </nav>
  <!-- /.Inicia menu -->
  <aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <a href="#" class="brand-link">
      <img src="dist/img/logo_aws.png" alt="foyer" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">foyer</span>
    </a>
    <div class="sidebar" style="font-size: xx-medium;">
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link">
              <p><h5>Sin asignar</h5></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Prioridad Alta</p>
              <span class="right badge badge-danger">7</span>  
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Prioridad Media</p>
              <span class="right badge badge-warning">5</span>  
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Prioridad Baja</p>
              <span class="right badge badge-info">5</span>  
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p><h5>En ruta</h5></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Prioridad Alta</p>
              <span class="right badge badge-danger">7</span>  
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Prioridad Media</p>
              <span class="right badge badge-warning">5</span>  
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Prioridad Baja</p>
              <span class="right badge badge-info">5</span>  
            </a>
          </li>
          <!-- /.Finaliza menu -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <table>
        <div class="row sm-1" >
          <div class="column">
            <div style="text-align: center;"> 
              <a href="Asignacion" class="brand-link">
                <h1>Asignaciones</h1>
                <img src="dist/img/Asignacion.png" alt="Asignaciones de Pedidos"  style="opacity: .8">  
              </a>  
            </div>  
          </div>
          <div class="column">
            <div style="text-align: center;"> 
              <a href="Revision" class="brand-link">
                <h1>Revision de pedidos</h1>
                <img src="dist/img/Revision.png" alt="Revision de pedidos"  style="opacity: .8">  
              </a>  
            </div> 
          </div> 
          <div class="column">
            <div style="text-align: center;"> 
              <a href="Certificador" class="brand-link">
                <h1>Certificar pedidos</h1>
                <img src="dist/img/Certificador.png" alt="Certificar pedidos"  style="opacity: .8">  
              </a>  
            </div> 
          </div> 
        </div> 
      <table> 
      </div> 
     <!-- <div class="content-footer">
          <strong>Copyright &copy; 2021 <a href="#">Appwebsome</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0-rc
    </div>
  </div> -->
    </section>     
      <?= $this->endSection() ?>



  <!-- Control Sidebar -->


