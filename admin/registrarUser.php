<?php
    require_once("../../model/conexion.php");
    require_once("../../model/validarSesion.php");
    require_once("../../controller/seguridadAdmin.php");


?>





<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../client-side/img/logofondo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <img src="../client-side/img/junior.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Junior Martinez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-users-cog"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarUser.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verUsers.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-beer"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarProducto.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verProductos.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          

          <li class="nav-item ">
            <a href="#" class="nav-link ">
            <i class="fas fa-shopping-cart"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarVenta.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verVentas.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-border-all"></i>
              <p>
                Pedidos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarPedido.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verPedidos.php" class="nav-link">
                  <i class="fas fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          

          

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-border-all"></i>
              <p>
                Sesion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="homeAdmin.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index.php" class="nav-link ">
                  <i class="fas fa-user-edit"></i>
                  <p>Cerrar Sesion</p>
                </a>
              </li>
            </ul>
          </li>
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REGISTRAR USUARIOS DEL SISTEMA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-dark">
              <div class="card-header">
                <h5 class="m-0">FORMULARIO DE REGISTRO</h5>
              </div>
              <form action="../../controller/insertarUserAdmin.php" method="POST"> 
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Identificación</label>
                      <input type="number" name="identificacion" class="form-control" id="exampleInputEmail1" placeholder="Ej: 123456789">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Tipo de Documento</label>
                      <select class="form-control select2" name="tipoDoc" style="width: 100%;">
                          <option value="">Seleccione una Opcion</option>
                          <option value="cedula">Cedula</option>
                          <option value="pasaporte">Pasaporte</option>
                          <option value="cedulaExtranjera">Cedula Extranjera</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Nombres</label>
                      <input type="text" class="form-control" name="nombres" id="exampleInputEmail1" placeholder="Junior">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" id="exampleInputEmail1" placeholder="Ej: Martinez">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Telefono</label>
                      <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" placeholder="Ej: 1234567890">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" name="fechaNacimiento" id="exampleInputEmail1" placeholder="Ej: 01/01/2001">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Correo</label>
                      <input type="email" name="correo" class="form-control" id="exampleInputEmail1" placeholder="Ej: Junior@gmail.com">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Rol</label>
                      <select class="form-control select2" name="rol" style="width: 100%;">
                          <option value="">Seleccione una Opcion</option>
                          <option value="administrador">Administrador</option>
                          <option value="empleado">Empleado</option>
                          <option value="cliente">Cliente</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Estado</label>
                      <select class="form-control select2" name="estado" style="width: 100%;">
                          <option value="">Seleccione una Opcion</option>
                          <option value="activo">Activo</option>
                          <option value="inactivo">Inactivo</option>
                          <option value="pendiente">Pendiente</option>
                      </select>
                    </div>
                    
                  </div>
                  
                  
                 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>
