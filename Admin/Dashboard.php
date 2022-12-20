<?php session_start();

if(isset($_SESSION['igaazauser'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Igaaza Creations | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/CropProtectionLogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-info navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <!--<span class="badge badge-danger navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/profile placeholder.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
               
                <?php
				 //echo'<h3 class="dropdown-item-title">';
				  echo'<p class="text-sm text-muted">';
				echo $_SESSION['igaazauser'];
                echo'</p>';
                echo'<p class="text-sm text-muted">';
				echo $_SESSION['igaazaemail'];
				echo'</p>';

				?>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <!--add message here-->
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Dashboard.php" class="brand-link">
      <img src="images/CropProtectionLogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Igaaza Creations</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profile placeholder.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['igaazauser'];?></a>
        </div>
      </div>

 <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fa fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="Dashboard.php" class="nav-link active">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
				 <i class="right fa fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="logout.php" class="nav-link active">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/ProductDetails.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product Registration</p>
                </a>
              </li>
             <!-- <li class="nav-item">
                <a href="pages/forms/Advise.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>-->
         
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Records
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="pages/tables/ProductsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="pages/tables/Bookings.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/tables/OrdersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="pages/tables/ClientsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/MembersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
             
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Reports
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/ProductReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/OrdersReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/MemberReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
			  
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/examples/profile.php" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">
                  <?php require_once('Includes/memberstotal.php')?>
                  <small>members</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Products</span>
                <span class="info-box-number"><?php require_once('Includes/reportstotal.php')?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Orders</span>
                <span class="info-box-number"><?php require_once('Includes/extensiontotals.php')?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-bell"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Product Providers</span>
                <span class="info-box-number"><?php require_once('Includes/notificationstotal.php')?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Pending Orders</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Order Date</th>
                  <th>Order By</th>
                  <th>Email</th>
				  <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                <tr>
				<?php
				require_once('Connection/connect.php');
				$sales6 ="SELECT ProductName,Quantity,OrderDate,OrderBy,OrderByEmail,OrderByPhone FROM `orders` Where SuppliedBy='Pending' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){

                 echo"<tr>";
				 echo "<td>".$row5['ProductName']."</td>";
				 echo "<td>".$row5['Quantity']."</td>";
                 echo "<td>".$row5['OrderDate']."</td>";
                 echo "<td>".$row5['OrderBy']."</td>";
				 echo "<td>".$row5['OrderByEmail']."</td>";
                 echo "<td>".$row5['OrderByPhone']."</td>";
                echo"</tr>";
				}
				//}else{
				//	echo $result5;
				//}
				?>
                
                </tbody>
                <tfoot>
               <!-- <tr>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                </tr>-->
                </tfoot>
              </table>
            </div>
           
          
              <!-- ./card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row
        <div class="row">
          <!-- Left col 
         
            <!-- /.card 
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                      <span data-toggle="tooltip" title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                              data-widget="chat-pane-toggle">
                        <i class="fa fa-comments"></i></button>
                      <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header 
                  <div class="card-body">
                    <!-- Conversations are loaded here
                    <div class="direct-chat-messages">
                      <!-- Message. Default to the left
                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name float-left">Denis</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-info 
                        <img class="direct-chat-img" src="dist/img/profile placeholder.jpg" alt="message user image">
                        <!-- /.direct-chat-img 
                        <div class="direct-chat-text">
                          Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text 
                      </div>
                      <!-- /.direct-chat-msg 

                      <!-- Message to the right 
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name float-right">Sarah </span>
                          <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-info 
                        <img class="direct-chat-img" src="dist/img/profile placeholder.jpg" alt="message user image">
                        <!-- /.direct-chat-img 
                        <div class="direct-chat-text">
                          You better believe it!
                        </div>
                        <!-- /.direct-chat-text 
                      </div>
                      <!-- /.direct-chat-msg 

                      <!-- Message. Default to the left
                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name float-left">Denis</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-info 
                        <img class="direct-chat-img" src="dist/img/profile placeholder.jpg" alt="message user image">
                        <!-- /.direct-chat-img 
                        <div class="direct-chat-text">
                          Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text
                      </div>
                      <!-- /.direct-chat-msg

                      <!-- Message to the right 
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name float-right">Sarah </span>
                          <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-info 
                        <img class="direct-chat-img" src="dist/img/profile placeholder.jpg" alt="message user image">
                        <!-- /.direct-chat-img 
                        <div class="direct-chat-text">
                          I would love to.
                        </div>
                        <!-- /.direct-chat-text 
                      </div>
                      <!-- /.direct-chat-msg 

                    </div>
                    <!--/.direct-chat-messages

                    <!-- Contacts are loaded here 
                    <div class="direct-chat-contacts">
                      <ul class="contacts-list">
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Denis
                                <small class="contacts-list-date float-right">2/28/2015</small>
                              </span>
                              <span class="contacts-list-msg">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info 
                          </a>
                        </li>
                        <!-- End Contact Item 
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah
                                <small class="contacts-list-date float-right">2/23/2015</small>
                              </span>
                              <span class="contacts-list-msg">I will be waiting for...</span>
                            </div>
                            <!-- /.contacts-list-info 
                          </a>
                        </li>
                        <!-- End Contact Item 
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah
                                <small class="contacts-list-date float-right">2/20/2015</small>
                              </span>
                              <span class="contacts-list-msg">I'll call you back at...</span>
                            </div>
                            <!-- /.contacts-list-info 
                          </a>
                        </li>
                        <!-- End Contact Item 
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Denis
                                <small class="contacts-list-date float-right">2/10/2015</small>
                              </span>
                              <span class="contacts-list-msg">Where is your new...</span>
                            </div>
                            <!-- /.contacts-list-info 
                          </a>
                        </li>
                        <!-- End Contact Item 
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah K.
                                <small class="contacts-list-date float-right">1/27/2015</small>
                              </span>
                              <span class="contacts-list-msg">Can I take a look at...</span>
                            </div>
                            <!-- /.contacts-list-info 
                          </a>
                        </li>
                        <!-- End Contact Item
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/profile placeholder.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Denis M.
                                <small class="contacts-list-date float-right">1/4/2015</small>
                              </span>
                              <span class="contacts-list-msg">Never mind I found...</span>
                            </div>
                            <!-- /.contacts-list-info
                          </a>
                        </li>
                        <!-- End Contact Item 
                      </ul>
                      <!-- /.contacts-list
                    </div>
                    <!-- /.direct-chat-pane 
                  </div>
                  <!-- /.card-body 
                  <div class="card-footer">
                    <form action="#" method="post">
                      <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                          <button type="button" class="btn btn-warning">Send</button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-footer
                </div>
                <!--/.direct-chat 
              </div>
              <!-- /.col 

              <div class="col-md-6">
                <!-- USERS LIST 
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">
					 
                      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header 
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
					
                    </ul>
                    <!-- /.users-list 
                  </div>
                  <!-- /.card-body 
                  <div class="card-footer text-center">
                    <a href="javascript::">View All Users</a>
                  </div>
                  <!-- /.card-footer 
                </div>
                <!--/.card 
              </div>
              <!-- /.col
            </div>
            <!-- /.row 			
          </div>
          <!-- /.col 


          <!-- /.col 
        </div>
        <!-- /.row 
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Version 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="http://cropprotection.com">Igaaza Creations</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
