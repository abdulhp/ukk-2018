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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
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
              <li><a data-toggle="collapse" data-target="#ListUser"><i class="fa fa-user"></i> List User <span class="badge pull-right-container"><?php echo $this->db->get('user')->num_rows();?></span></a></li>
              <li><a data-toggle="collapse" data-target="#InputUser"><i class="fa fa-user-plus"></i> Input User</a></li>
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
          <li class="active"><a><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>

      <!-- section of collapsed interface  -->
      <section class="content">

        <!-- box of flight reservation -->
        <div class="box collapse" id="FlightReservation">
          <div class="box-header with-border">
            <h3 class="box-title">Reservation</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <form role="form" action="" method="POST">
              <div class="box-body">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="password" class="form-control" id="phone" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        
                        <div class="radio">
                          <div class="col-md-6">
                            <label>
                              <input type="radio" name="gender" id="men" value="1">
                              Men
                            </label>
                          </div>
                        </div>
                        <div class="radio">
                          <div class="col-md-6">
                            <label>
                              <input type="radio" name="gender" id="women" value="0">
                              Women
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Reservation Date:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservationdate">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Rute</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Seat</label>
                      <select class="form-control select2" id="seat" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option> 
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="password" class="form-control" id="phone" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="gender" id="men" value="1">
                          Men
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gender" id="women" value="0">
                          Women
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /box of flight reservation -->

        <!-- box of input user -->
        <div class="box collapse" id="InputUser">
          <div class="box-header with-border">
            <h3 class="box-title">Input User</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <form role="form" action="<?php echo base_url('welcome/add');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="fullname">Fullname</label>
                  <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Fullname">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="level">Level</label>
                  <select id="level" class="form-control" name="level">
                    <option value="1">Owner</option>
                    <option value="2">Administrator</option>
                    <option value="3">Helper</option>
                    <option value="4">Operator</option>
                    <option value="5">User</option>
                  </select>

                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /box of input user -->

        <!-- list user -->
        <div class="box collapse" id="ListUser">
          <div class="box-header with-border">
            <h3 class="box-title">List User</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <table id="listcostumer" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($users as $usr){?>
                <tr>
                  <td><?php echo $usr->id; ?></td>
                  <td><?php echo $usr->username; ?></td>
                  <td><?php echo $usr->fullname; ?></td>
                  <td><?php echo $usr->level; ?></td>
                  <td><a href="<?php echo base_url();?>edituser/index/<?php echo $usr->id;?>" class="btn btn-info">edit</a><a href="<?php echo base_url();?>welcome/delete/<?php echo $usr->id;?>" class="btn btn-danger">delete</a></td>
                </tr>
                <?php} ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- /list user -->

        <!-- box of check reservation -->
        <div class="box collapse" id="CheckReservation">
          <div class="box-header with-border">
            <h3 class="box-title">List Costumer</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button"class="btn btn-box-tool"data-widget="remove"data-toggle="tooltip"title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <table id="cekreservasi"class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Reservation Code</th>
                  <th>Reservation At</th>
                  <th>Reservation Date</th>
                  <th>Seat Code</th>
                  <th>Costumer id</th>
                  <th>Rute id</th>
                  <th>Depart at</th>
                  <th>Price</th>
                  <th>User id</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($reservasi as $rsv){?>
                <tr>
                  <td><?php echo $rsv->id; ?></td>
                  <td><?php echo $rsv->reservation_code; ?></td>
                  <td><?php echo $rsv->reservation_at; ?></td>
                  <td><?php echo $rsv->reservation_date; ?></td>
                  <td><?php echo $rsv->seat_code; ?></td>
                  <td><?php echo $rsv->customer_id; ?></td>
                  <td><?php echo $rsv->rute_id;?></td>
                  <td><?php echo $rsv->depart_at;?></td>
                  <td><?php echo $rsv->price;?></td>
                  <td><?php echo $rsv->user_id;?></td>
                  <td><a href="<?php echo base_url();?>edituser/index/<?php echo $rsv->id;?>"class="btn btn-info">edit</a><a href="<?php echo base_url();?>welcome/delete/<?php echo $rsv->id;?>"class="btn btn-warning"onclick="return">delete</a></td>
                </tr>
                <?php} ?>
              </tbody>
              <tfoot>
               <tr>
                <th>Id</th>
                <th>Reservation Code</th>
                <th>Reservation At</th>
                <th>Reservation Date</th>
                <th>Seat Code</th>
                <th>Costumer id</th>
                <th>Rute id</th>
                <th>Depart at</th>
                <th>Price</th>
                <th>User id</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /box of check reservation -->
      </div>
    </section>
  </div>


  <!-- footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a>Abdul HP</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- /footer -->
</section>
</ol>
</section>
</div>
</div>

</body>
<!-- /body -->

<!-- load script -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(document).ready(function () {$('.sidebar-menu').tree()})
</script>
<script>
  $(function () {$('#listcostumer').DataTable()
    $('#cekreservasi').DataTable()
    $('#reservationdate').datepicker({autoclose: true})
    $('.select2').select2()})
  </script>

  <!-- /load script -->
  </html>