<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitor de ordenes</title>
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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
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
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  Prioridad Alta
                </h3>
              </div>
              <div class="card-body">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-3">
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">JM-1952</h3>
                        </div>
                        <div class="card-body">
                          <table>
                          <div class="row">
                            <div class="column">Codigo de cliente: </div>  
                            <div class="column">1928 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Valor orden : </div>  
                            <div class="column">Q 19.28 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Estado : </div>  
                            <div class="column">Sin asignar </div>  
                          </div>
                          <div class="row">
                            <div class="column">  </div>  
                          </div>
                        </table>
                        <p></p>
                        <a class="btn btn-sm">
                          <i class="fas fa-edit"></i> Asignar
                        </a>       
                        </div>
                      </div>                      
                  </div>    
                  <div class="col-sm-3">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">JM-1954</h3>
                      </div>
                      <div class="card-body">
                        <table>
                        <div class="row">
                          <div class="column">Codigo de cliente: </div>  
                          <div class="column">1928 </div>  
                        </div>
                        <div class="row">
                          <div class="column">Valor orden : </div>  
                          <div class="column">Q 19.28 </div>  
                        </div>
                        <div class="row">
                          <div class="column">Estado : </div>  
                          <div class="column">Sin asignar </div>  
                        </div>
                        <div class="row">
                          <div class="column">  </div>  
                        </div>
                      </table>
                      <p></p>
                      <a class="btn btn-sm">
                        <i class="fas fa-edit"></i> Asignar
                      </a>       
                      </div>
                    </div>                      
                  </div>    
                  <div class="col-sm-3">
                    <div class="card card-green">
                      <div class="card-header">
                        <h3 class="card-title">JM-2001</h3>
                      </div>
                      <div class="card-body">
                        <table>
                        <div class="row">
                          <div class="column">Codigo de cliente: </div>  
                          <div class="column">1925 </div>  
                        </div>
                        <div class="row">
                          <div class="column">Valor orden : </div>  
                          <div class="column">Q 19.28 </div>  
                        </div>
                        <div class="row">
                          <div class="column">Estado : </div>  
                          <div class="column">En ruta </div>  
                        </div>
                        <div class="row">
                          <div class="column">  </div>  
                        </div>
                      </table>
                      <p> </p>
                      </div>
                    </div>                      
                  </div>    
                </div>                   
                    <!-- /.card-body -->
                  </div>
                </div>
               
              </div>
            </div>
            

          </div>
        </div>
        <!-- container por prioridad -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    Prioridad Media
                  </h3>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-3">
                        <div class="card card-danger">
                          <div class="card-header">
                            <h3 class="card-title">JM-1952</h3>
                          </div>
                          <div class="card-body">
                            <table>
                            <div class="row">
                              <div class="column">Codigo de cliente: </div>  
                              <div class="column">1928 </div>  
                            </div>
                            <div class="row">
                              <div class="column">Valor orden : </div>  
                              <div class="column">Q 19.28 </div>  
                            </div>
                            <div class="row">
                              <div class="column">Estado : </div>  
                              <div class="column">Sin asignar </div>  
                            </div>
                            <div class="row">
                              <div class="column">  </div>  
                            </div>
                          </table>
                          <p></p>
                          <a class="btn btn-danger btn-sm" href="#" title="Eliminar" data-toggle="modal" data-target="#myModala1">
                            <i class="fas fa-edit"></i> Asignar
                          </a>       
                          </div>
                        </div>                      
                    </div>    
                    <div class="col-sm-3">
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">JM-1954</h3>
                        </div>
                        <div class="card-body">
                          <table>
                          <div class="row">
                            <div class="column">Codigo de cliente: </div>  
                            <div class="column">1928 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Valor orden : </div>  
                            <div class="column">Q 19.28 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Estado : </div>  
                            <div class="column">Sin asignar </div>  
                          </div>
                          <div class="row">
                            <div class="column">  </div>  
                          </div>
                        </table>
                        <p></p>
                        <a class="btn btn-sm">
                          <i class="fas fa-edit"></i> Asignar
                        </a>       
                        </div>
                      </div>                      
                    </div>    
                    <div class="col-sm-3">
                      <div class="card card-green">
                        <div class="card-header">
                          <h3 class="card-title">JM-2001</h3>
                        </div>
                        <div class="card-body">
                          <table>
                          <div class="row">
                            <div class="column">Codigo de cliente: </div>  
                            <div class="column">1925 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Valor orden : </div>  
                            <div class="column">Q 19.28 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Estado : </div>  
                            <div class="column">En ruta </div>  
                          </div>
                          <div class="row">
                            <div class="column">  </div>  
                          </div>
                        </table>
                        <p> </p>
                        </div>
                      </div>                      
                    </div>    
                  </div>                   
                      <!-- /.card-body -->
                    </div>
                  </div>
        <!-- container por prioridad -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    Prioridad Media
                  </h3>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-3">
                        <div class="card card-danger">
                          <div class="card-header">
                            <h3 class="card-title">JM-1952</h3>
                          </div>
                          <div class="card-body">
                            <table>
                            <div class="row">
                              <div class="column">Codigo de cliente: </div>  
                              <div class="column">1928 </div>  
                            </div>
                            <div class="row">
                              <div class="column">Valor orden : </div>  
                              <div class="column">Q 19.28 </div>  
                            </div>
                            <div class="row">
                              <div class="column">Estado : </div>  
                              <div class="column">Sin asignar </div>  
                            </div>
                            <div class="row">
                              <div class="column">  </div>  
                            </div>
                          </table>
                          <p></p>
                          <a class="btn btn-sm">
                            <i class="fas fa-edit"></i> Asignar
                          </a>       
                          </div>
                        </div>                      
                    </div>    
                    <div class="col-sm-3">
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">JM-1954</h3>
                        </div>
                        <div class="card-body">
                          <table>
                          <div class="row">
                            <div class="column">Codigo de cliente: </div>  
                            <div class="column">1928 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Valor orden : </div>  
                            <div class="column">Q 19.28 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Estado : </div>  
                            <div class="column">Sin asignar </div>  
                          </div>
                          <div class="row">
                            <div class="column">  </div>  
                          </div>
                        </table>
                        <p></p>
                        <a class="btn btn-sm">
                          <i class="fas fa-edit"></i> Asignar
                        </a>       
                        </div>
                      </div>                      
                    </div>    
                    <div class="col-sm-3">
                      <div class="card card-green">
                        <div class="card-header">
                          <h3 class="card-title">JM-2001</h3>
                        </div>
                        <div class="card-body">
                          <table>
                          <div class="row">
                            <div class="column">Codigo de cliente: </div>  
                            <div class="column">1925 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Valor orden : </div>  
                            <div class="column">Q 19.28 </div>  
                          </div>
                          <div class="row">
                            <div class="column">Estado : </div>  
                            <div class="column">En ruta </div>  
                          </div>
                          <div class="row">
                            <div class="column">  </div>  
                          </div>
                        </table>
                        <p> </p>
                        </div>
                      </div>                      
                    </div>    
                  </div>                   
                      <!-- /.card-body -->
                    </div>
                  </div>
                                       <!-- /.fin container -->
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Appwebsome</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0-rc
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<div class="modal fade" id="myModala1" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title">  Asignacion de pedidos</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <label for="field-1" class="col-sm-4 control-label">Numero de orden</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="id_marca1" name="id_marca" value="" required autofocus readonly />
                  </div>
              </div>

              <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">JM 1923</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="nombre_marca1" name="nombre_marca" value="" required autofocus />
                  </div>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-offset-3 col-sm-5">
                  <button type="submit" class="btn btn-info">Eliminar</button>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
</body>
</html>