<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AIRTransport | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/all.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!-- body -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <!-- global web content wrapper -->
  <div class="wrapper">

    <!-- top section / top header -->
    <header class="main-header">

      <!-- logo for brand in nav -->
      <a href="<?php echo base_url();?>" class="logo">
        <span class="logo-mini"><b><i>A</i>IR</b> <i class="fa fa-plane"></i></span>
        <span class="logo-lg"><b><i>A</i>IR</b>Transport <i class="fa fa-plane"></i></span>
      </a>
      <!-- /logo for brand in nav -->

      <!-- responsive nav top -->
      <nav class="navbar navbar-static-top">
        <a class="sidebar-toggle collapse" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <!-- costum nav -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- dropdown user -->
            <li class="dropdown user user-menu">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
              </a>

              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $this->session->userdata('username');?>
                  </p>
                </li>

                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a>Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a>Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a>Friends</a>
                    </div>
                  </div>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>

              </ul>

            </li>
            <!-- /dropdown user -->


          </ul>

        </div>

      </nav>
      <!-- /responsive nav top -->

    </header>
    <!-- /top section / top header -->

    <!-- sidebar -->
    <aside class="main-sidebar">

      <!-- section sidebar -->
      <section class="sidebar">

        <!-- ul at sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">

          <!-- a group of reservation dropdown -->
          <li class="treeview">
            <a>
              <i class="fa fa-folder"></i> <span>Reservation</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a data-toggle="collapse" data-target="#CheckReservation"><i class="fa fa-calendar-check-o"></i> Flight Check  <span class="badge pull-right-container"><?php echo $this->db->get('reservation')->num_rows();?></span></a></li>
              <li><a data-toggle="collapse" data-target="#FlightReservation"><i class="fa fa-book"></i> Flight Reservation</a></li>
            </ul>
          </li>
          <!-- /a group of reservation dropdown -->

          <!-- a group of user dropdown -->
          <li class="treeview">
            <a>
              <i class="fa fa-users"></i> <span>User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a><i class="fa fa-user"></i> List User <span class="badge pull-right-container"><?php echo $this->db->get('user')->num_rows();?></span></a></li>
              <li><a href="<?php echo base_url('inputuser');?>"><i class="fa fa-user-plus"></i> Input User</a></li>
            </ul>
          </li>
          <!-- /a group of user dropdown -->

          <!-- a group of customer dropdown -->
          <li class="treeview">
            <a>
              <i class="fa fa-users"></i> <span>Customer</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a data-toggle="collapse" data-target="#ListCustomer"><i class="fa fa-user"></i> List Customer <span class="badge pull-right-container"><?php echo $this->db->get('customer')->num_rows();?></span></a></li>
              <li><a data-toggle="collapse" data-target="#InputCustomer"><i class="fa fa-user-plus"></i> Input Customer</a></li>
            </ul>
          </li>
          <!-- /a group of customer dropdown -->

          <!-- a group of rute dropdown -->
          <li class="treeview">
            <a>
              <i class="fa fa-road"></i> <span>Rute</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a data-toggle="collapse" data-target="#ListRute"><i class="fa fa-road"></i> List Rute <span class="badge pull-right-container"><?php echo $this->db->get('rute')->num_rows();?></span></a></li>
              <li><a data-toggle="collapse" data-target="#InputRute"><i class="fa fa-plus"></i> Input Rute</a></li>
            </ul>
          </li>
          <!-- /a group of rute dropdown -->

          <!-- a group of transportation -->
          <li class="treeview">
            <a>
              <i class="fa fa-plane"></i> <span>Transportation</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a data-toggle="collapse" data-target="#ListTrans"><i class="fa fa-list"></i> List Transportation <span class="badge pull-right-container"><?php echo $this->db->get('transportation')->num_rows();?></span></a></li>
              <li><a data-toggle="collapse" data-target="#InputTrans"><i class="fa fa-plus"></i> Input Transportation</a></li>
            </ul>
          </li>
          <!-- /a group of transportation -->

        </ul>
        <!-- /ul at sidebar menu -->

      </section>
      <!-- /section sidebar -->

    </aside>
    <!-- /sidebar -->

    <!-- local content wrapper -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Dashboard
          <small>Welcome, <?php echo $this->session->userdata('username');?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a><i class="fa fa-user"></i> User</a></li>
          <li class="active"><a><i class="fa fa-edit"></i> Edit</a></li>
        </ol>
      </section>

      <!-- section of collapsed interface  -->
      <section class="content">

        <!-- list user -->
        <div class="box " id="InputReservasi">
          <div class="box-header with-border">
            <h3 class="box-title">Input Reservasi</h3>
          </div>
          <div class="box-body">
            <form action="<?php echo base_url('reservation/procadd');?>" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div class="radio">
                  <label><input type="radio" name="gender" class="flat-red" value="1"> Men</label>
                  <label><input type="radio" name="gender" class="flat-red" value="0"> Women</label>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="reservdate">Reservation Date</label>
                <input type="text" class="form-control" name="reservdate" id="datepicker" placeholder="Enter Date">
              </div>
              <div class="form-group">
                <label for="rute">Rute</label>
                <select name="rute" class="form-control select2">
                  <?php foreach($rute as $rute): ?>
                    <option value="<?php echo $rute->id; ?>"><?php echo $rute->rute_from; ?>, <?php echo $rute->rute_to; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="seat">Seat</label>
                <select name="seat" class="form-control select2">
                  <?php 
                  $no=0;
                  for ($i=0; $i < 100; $i++) { 
                    # code...
                    $no++
                    ?>
                    <option value="A<?php echo $no; ?>">A<?php echo $no; ?></option>
                    <?php 
                  } 
                  ?>
                </select>
              </div>

            </div>
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>
        </div>
        <!-- /list user -->

      </section>
    </div>

    <!-- footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2018 <a>Abdul HP</a>.</strong> All rights
      reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
  </div>



</body>
<!-- /body -->

<!-- load script -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
 $(function () {
  $('#datepicker').datepicker({autoclose: true, format: 'yyyy/mm/dd'})
  $('.select2').select2()
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  })
})
</script>
<!-- /load script -->

</html>