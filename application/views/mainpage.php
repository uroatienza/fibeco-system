<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FIBECO Inc. | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url()."assets/adminlte/"; ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="<?php echo base_url()."assets/adminlte/"; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- for Angularjs -->
  <script src="<?php echo base_url()."assets/js/";?>angular.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url()."mainpage"; ?>#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FBC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FIBECO</b>Inc.</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()."assets/adminlte/"; ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()."assets/adminlte/"; ?>dist/img/avatar2.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('fname')."&nbsp;&nbsp;[".$this->session->userdata('type')."]"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets/adminlte/"; ?>dist/img/avatar2.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('fname')."&nbsp;&nbsp;[".$this->session->userdata('type')."]"; ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/adminlte/"; ?>#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/adminlte/"; ?>#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/adminlte/"; ?>#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()."assets/adminlte/"; ?>#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()."assets/adminlte/"; ?>#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src="<?php echo base_url()."assets/adminlte/"; ?>dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('fname')."&nbsp;&nbsp;[".$this->session->userdata('type')."]"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('mainpage/'); ?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('mainpage/job_order'); ?>">
            <i class="fa fa-files-o"></i>
            <span>Job Order</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right" id="job_order_num">TEST</span>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('mainpage/accomplishments'); ?>">
            <i class="fa fa-th"></i> <span>Accomplishments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('mainpage/reports'); ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('mainpage/user_management'); ?>"><i class="fa fa-circle-o"></i>User</a></li>
            <li><a href="<?php echo base_url('mainpage/area_management'); ?>"><i class="fa fa-circle-o"></i>Area</a></li>
            <li><a href="<?php echo base_url('mainpage/category'); ?>"><i class="fa fa-circle-o"></i>Complain section</a></li>
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
        <?php echo $title; ?>
        <small>page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

   


<!-- Main content -->
    <section class="content">
 
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <div id="pages-container"> <!-- START OF PAGES DIV--><?php $this->load->view($page); ?></div> <!-- END OF PAGES DIV-->
        
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">First Bukidnon Electric Cooperative Inc., Maramag, Bukidnon, Philippines</a>.</strong> All rights
    reserved. 
  </footer>





  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
        <div class="tab-content">
                  <ul class="control-sidebar-menu">                                                                 
                  <li>
                    <a href="#"data-toggle="modal" data-target="#profile">
                      <i class="menu-icon fa fa-user bg-yellow"></i>
                      <div class="menu-info">
                        <span><h4 class="control-sidebar-subheading"><?php echo $this->session->userdata('fname')."&nbsp;&nbsp;[".$this->session->userdata('type')."]"; ?></h4></span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('login/logout'); ?>">
                      <i class="menu-icon fa fa-sign-out bg-red"></i>
                      <div class="menu-info">
                        <span><h4 class="control-sidebar-subheading">Logout</h4></span>
                      </div>
                    </a>
                  </li>

                  </ul>
        </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/adminlte/"; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/adminlte/"; ?>dist/js/demo.js"></script>

</body>
</html>
