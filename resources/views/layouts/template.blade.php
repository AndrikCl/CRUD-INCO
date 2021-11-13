<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Simple Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel ="stylesheet" href= "{{url('css/app.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IN</b>CO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventarios</b>Colombia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a>
      <img src="{{URL::asset('/img/mh.png')}}"  class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Nombre de persona que se Loguea</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('/img/perfil.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      hola alex
      <ul class="sidebar-menu" data-widget="tree">
      
        <li class="treeview">


       <li class="nav-item">
                            <a class="nav-link" href="{{ route('suppliers.index') }}">{{ __('suppliers') }}</a>
                     </li>
             <span class="pull-right-container">
            </span>
            <ul class="treeview-menu">
            <li><a href="../supplier/create"><i ></i>crear proveedor</a></li>
            <li><a href="../edit"><i ></i>editar proveedor</a></li>
            <li><a href="../form"><i ></i>ver detalles proveedor</a></li>
          
          </ul>
          
              </li>





        <li class="treeview">




          <a href="#">
            <i><img src="{{URL::asset('/img/employee.png')}}"></i> <span>Empleados</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i ></i> Nuevo Empleado</a></li>
            <li><a href="../../index2.html"><i ></i>Actualizar Empleado</a></li>
            <li><a href="../../index2.html"><i ></i>Reportes de Empleados</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/inventory.png')}}"></i>
            <span>Inventarios</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i></i> Nueva Entrada</a></li>
            <li><a href="../layout/boxed.html"><i></i> Nuevo Producto</a></li>
            <li><a href="../layout/fixed.html"><i></i> Reportes de Productos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/customer.png')}}"></i>
            <span>Clientes</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i></i> Actualizar Cliente</a></li>
            <li><a href="../layout/fixed.html"><i></i> Reportes de Clientes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/cashregister.png')}}"></i>
            <span>Caja registradora</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i></i> Generar Venta</a></li>
            <li><a href="../layout/boxed.html"><i></i> Reporte de Caja</a></li>
            <li><a href="../layout/fixed.html"><i></i> Reporte de Ventas</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2021 <a> Grupo 3 ADSI </a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('js/app.js')}}"></script> 
</body>
</html>
