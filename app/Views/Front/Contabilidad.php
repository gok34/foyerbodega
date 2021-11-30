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
    <h3>Contabilidad (Asignacion de pedidos)</h3>
  </nav>
  <!-- /.Inicia menu -->
  <aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <a href="#" class="brand-link">
      <img src="dist/img/logo_aws.png" alt="foyer" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">foyer</span>
    </a>
    <div class="sidebar" >
      <!-- Sidebar Menu -->
      <nav class="mt-6">
        <ul class="nav nav-pills nav-sidebar " data-widget="treeview" role="menu" data-accordion="true">
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
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title " >
                  Pedidos Completos
                </h3>
                <div class="card-tools">
                <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="container-fluid slidebar ">
                  <div class="row mb-2 align-items-center">
                  <div class="col-sm-3">
                      <div class="card card-green ">
                        <div class="card-header text-center">
                          <h2 class="card-title text-center" >JM-1952</h2>
                        </div>
                        <div class="card-body" >
                          <table>
                          <div class="row sm-1" >
                            <div class="column" style="font-size:25px;" >Codigo de cliente: </div>  
                            <div class="column" style="font-size:25px;" >1928 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Valor Pedido : </div>  
                            <div class="column" style="font-size:25px;" >Q 19.28 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Estado : </div>  
                            <div class="column" style="font-size:25px;" >Completo</div>  
                          </div>
                        </table>
                        <a class="btn btn-sm" style="font-size:30px; color:green;" href="#" title="Asignar pedidos" data-toggle="modal" data-target="#myModala1">
                          <i class="fas fa-clipboard-check"></i> Procesar
                        </a>       
                        </div>                        
                      </div>                      
                  </div>  
                  <div class="col-sm-3">
                      <div class="card card-green ">
                        <div class="card-header text-center">
                          <h2 class="card-title text-center" >JM-1952</h2>
                        </div>
                        <div class="card-body" >
                          <table>
                          <div class="row sm-1" >
                            <div class="column" style="font-size:25px;" >Codigo de cliente: </div>  
                            <div class="column" style="font-size:25px;" >1928 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Valor Pedido : </div>  
                            <div class="column" style="font-size:25px;" >Q 19.28 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Estado : </div>  
                            <div class="column" style="font-size:25px;" >Completo</div>  
                          </div>
                        </table>
                        <a class="btn btn-sm" style="font-size:30px; color:green;" href="#" title="Asignar pedidos" data-toggle="modal" data-target="#myModala1">
                          <i class="fas fa-clipboard-check"></i> Procesar
                        </a>       
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
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title " >
                  Pedidos Incompleto
                </h3>
                <div class="card-tools">
                <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
              
                <div class="container-fluid slidebar ">
                  <div class="row mb-2 align-items-center">
                    <div class="col-sm-3">
                      <div class="card card-danger ">
                        <div class="card-header text-center">
                          <h2 class="card-title text-center" >JM-1952</h2>
                        </div>
                        <div class="card-body" >
                          <table>
                          <div class="row sm-1" >
                            <div class="column" style="font-size:25px;" >Codigo de cliente: </div>  
                            <div class="column" style="font-size:25px;" >1928 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Valor Pedido : </div>  
                            <div class="column" style="font-size:25px;" >Q 19.28 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Estado : </div>  
                            <div class="column" style="font-size:25px;" >Incompleto</div>  
                          </div>
                        </table>
                        <a class="btn btn-sm" style="font-size:30px; color:green;" href="#" title="Asignar pedidos" data-toggle="modal" data-target="#myModala2">
                          <i class="fas fa-clipboard-check"></i> Procesar
                        </a>       
                        </div>                        
                      </div>                      
                  </div>  
                  <div class="col-sm-3">
                      <div class="card card-danger ">
                        <div class="card-header text-center">
                          <h2 class="card-title text-center" >JM-1953</h2>
                        </div>
                        <div class="card-body" >
                          <table>
                          <div class="row sm-1" >
                            <div class="column" style="font-size:25px;" >Codigo de cliente: </div>  
                            <div class="column" style="font-size:25px;" >1950 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Valor Pedido : </div>  
                            <div class="column" style="font-size:25px;" >Q 40.28 </div>  
                          </div>
                          <div class="row sm-1">
                            <div class="column" style="font-size:25px;" >Estado : </div>  
                            <div class="column" style="font-size:25px;" >Incompleto</div>  
                          </div>
                        </table>
                        <a class="btn btn-sm" style="font-size:30px; color:green;" href="#" title="Asignar pedidos" data-toggle="modal" data-target="#myModala2">
                          <i class="fas fa-clipboard-check"></i> Procesar
                        </a>       
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<div class="modal fade" id="myModala1" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color: green; color: white; font-style: inherit; font-size: xx-large;">
              <h2 class="modal-title">  Asignacion de factura </h2>
              <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
              <div class="form-group" >
                  <label for="field-1" class="col-sm-4 control-label">Numero de Recibo</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="id_recibo" name="id_recibo" value="JM-1951" required autofocus readonly />
                  </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Codigo Cliente</label>
                <div class="col-sm-4" style="display: none">
                    <input type="text" class="form-control" id="id_Cliente" name="id_Cliente" value="1578" required autofocus readonly />
                </div>
                <div class="col-sm-12"> 
                    <input type="text" class="form-control" id="nombre_Cliente" name="nombre_Cliente" value="Farmacia el ahorro" required autofocus readonly />
                </div>
              </div>
              <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">Fecha de ingreso</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="26/11/2021 11:02 pm" required autofocus readonly />
                  </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">Monto Recibo</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="Monto_ingreso" name="Monto_ingreso" value="19.28" required autofocus readonly />
                </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">Estado de pedido</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="estado_pedido" name="estado_pedido" value="Pendiente" required autofocus readonly />
                </div>  
              </div>               
              <div class="table-responsive-lg">
                <div class="col-sm-12">
                  <table class="table table-striped w-auto " id="table_export" style="font-size:25px; text-center">
                    <thead>
                      <tr>
                        <th style="display:none"><div>Cod. Prod</div></th>
                        <th style=""><div>Producto</div></th>
                        <th style=""><div>Cantidad</div></th>
                        <th style=""><div>Valor</div></th>
                        <th style=""><div>Stock</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr id="casa1">
                        <td style="display:none">1112</td>
                        <td style="">Aspirina</td>
                        <td style="">1000</td>
                        <td style="">1.00</td>
                        <td style="">
                          <input type="checkbox" id="checkbox-2" class="custom-control custom-checkbox checkbox-xl" style="width: 30%; align:center" checked="" disabled>
                        </td>
                      </tr>
                      <tr id="casa1">
                        <td style="display:none">1112</td>
                        <td style="">Vitaflenaco</td>
                        <td style="">1200</td>
                        <td style="">3.00</td>
                        <td style="">
                          <input type="checkbox" id="checkbox-2" class="custom-control custom-checkbox checkbox-xl" style="width: 30%; align:center" checked="" disabled>
                        </td>
                      </tr>

                    </tbody>  
                  </table>
                </div>
                <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">Numero factura</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="Codigo_empleado" name="Codigo_empleado" value="" required autofocus />
                </div>                  
              </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
            </div>
            </div>
      </div>
  </div>
</div>

<div class="modal fade" id="myModala2" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color: red; color: white; font-style: inherit; font-size: xx-large;">
              <h2 class="modal-title">Pedido Incompleto</h2>
              <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
              <div class="form-group" >
                  <label for="field-1" class="col-sm-4 control-label">Numero de Recibo</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="id_recibo" name="id_recibo" value="JM-1951" required autofocus readonly />
                  </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Codigo Cliente</label>
                <div class="col-sm-4" style="display: none">
                    <input type="text" class="form-control" id="id_Cliente" name="id_Cliente" value="1578" required autofocus readonly />
                </div>
                <div class="col-sm-12"> 
                    <input type="text" class="form-control" id="nombre_Cliente" name="nombre_Cliente" value="Farmacia el ahorro" required autofocus readonly />
                </div>
              </div>
              <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">Fecha de ingreso</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="26/11/2021 11:02 pm" required autofocus readonly />
                  </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">Monto Recibo</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="Monto_ingreso" name="Monto_ingreso" value="19.28" required autofocus readonly />
                </div>
              </div>
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">Estado de pedido</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="estado_pedido" name="estado_pedido" value="Pendiente" required autofocus readonly />
                </div>  
              </div>               
              <div class="table-responsive-lg">
                <div class="col-sm-12">
                  <table class="table table-striped w-auto " id="table_export" style="font-size:25px; text-center">
                    <thead>
                      <tr>
                        <th style="display:none"><div>Cod. Prod</div></th>
                        <th style=""><div>Producto</div></th>
                        <th style=""><div>Cantidad</div></th>
                        <th style=""><div>Valor</div></th>
                        <th style=""><div>Stock</div></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr id="casa1">
                        <td style="display:none">1112</td>
                        <td style="">Aspirina</td>
                        <td style="">1000</td>
                        <td style="">1.00</td>
                        <td style="">
                          <input type="checkbox" id="checkbox-2" class="custom-control custom-checkbox checkbox-xl" style="width: 30%; align:center" checked="" disabled>
                        </td>
                      </tr>
                      <tr id="casa1" style="color :red">
                        <td style="display:none">1112</td>
                        <td style="">Vitaflenaco</td>
                        <td style="">1200</td>
                        <td style="">3.00</td>
                        <td style="">
                          <input type="checkbox" id="checkbox-2" class="custom-control custom-checkbox checkbox-xl" style="width: 30%; align:center"  disabled>
                        </td>
                      </tr>

                    </tbody>  
                  </table>
                </div>
                </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-info">Asignar pedido</button>
                </div>
            </div>
            </div>
      </div>
  </div>
</div>
<?= $this->endSection() ?>
