<?php 
session_start();

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

  <title>Igaaza Creations | Bookings </title>
 <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/CropProtectionLogo.png" />
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
        <a href="../../Dashboard.php" class="nav-link">Home</a>
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
              <img src="../../dist/img/profile placeholder.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
          <a href="../../logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../Dashboard.php" class="brand-link">
      <img src="../../images/CropProtectionLogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AIFU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/profile placeholder.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['igaazauser'];?></a>
        </div>
      </div>
	  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../../Dashboard.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
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
                <a href="../forms/ProductDetails.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product Registration</p>
                </a>
              </li>
           
            </ul>
          </li>
		  <li class="nav-item has-treeview   menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Records
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="ProductsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="Bookings.php" class="nav-link  active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="OrdersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="ClientsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="MembersTable.php" class="nav-link">
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
                <a href="../examples/ProductReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/OrdersReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/MemberReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
			  
            </ul>
          </li>
          <li class="nav-item">
            <a href="../examples/profile.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bookings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Bookings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card"'>
            <div class="card-header">
              <h3 class="card-title">Bookings Records</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"  style='overflow-x:scroll'>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				<tr>
                  <th>Date</th>
                  <th>Order Code</th>
				  <th>Order Notes</th>
                  <th>Total Cost</th>
				  <th>Order By</th>
                  <th>Cleared</th>
                  <th>Payment Method</th>
				  <th>Transaction Code</th>
				   <th> </th>
				   
                </tr>
				</thead>
               <?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT * FROM `bookings` order by IDs Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                 echo"<tr>";
				 echo "<td>".$row5['Date']."</td>";
				 echo "<td><a href='OrdersTable.php?ordercode=".$row5['OrderCode']."'>".$row5['OrderCode']."</a></td>";
				  echo "<td>".$row5['OrderNotes']."</td>";
                 echo "<td>".$row5['TotalCost']."</td>";
				 echo "<td>".$row5['User']."</td>";
				 echo "<td>".$row5['Cleared']."</td>";
				 echo "<td>".$row5['ClearanceType']."</td>";
				 echo "<td>".$row5['TransactionID']."</td>";
				  $id=$row5['IDs'];
				 /*$OrderSttatus=$row5['OrderStatus'];
					if($OrderSttatus=='Pending'){
						echo'<td><form method="get" ><a href="OrdersTable.php"><button type="submit" name="supply"  value="'.$id.'" class="btn btn-block btn-warning">Supply</button></a></form></td>'; 
					
					}else{				  
				  echo "<td>".$row5['OrderStatus']."</td>";
					}
					 echo "<td>".$row5['StatusDate']."</td>";
					  echo "<td>".$row5['SuppliedBy']."</td>";
					   echo "<td>".$row5['PaymentStatus']."</td>";
				 echo "<td>".$row5['PaymentMethod']."</td>";
				 echo "<td>".$row5['IDDesc']."</td>";*/
				 echo'<td><form method="get" ><a href="Bookings.php"><button type="submit" name="delete"  value="'.$id.'" class="btn btn-block btn-danger">Delete</button></a></form></td>'; 
			 
                echo"</tr>";
				}
				?>
				<?php
				if(isset($_GET['delete'])){
					$id=$_GET['delete'];	
                        if(isset($id)){
				$sales6 ="DELETE  FROM bookings WHERE IDs='".$id."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Booking Record successfully Deleted");';
				echo'window.location.href="Bookings.php";';
				echo '</script>';
							}else{
				echo '<script type="application/javascript">';
				echo'alert("Booking Record Delete Failed");';
				//echo'alert("'.$id.'");';
				echo'window.location.href="Bookings.php";';
				echo '</script>';
								}
						 }
						 }
						  ?>  
				<?php
				if(isset($_GET['supply'])){
					$id=$_GET['supply'];	
                        if(isset($id)){
							$timeregistered=date("Y-m-d H:i:s");
				$sales6 ="UPDATE  orders Set OrderStatus='Supplied',StatusDate='".$timeregistered."',SuppliedBy='AIFU' WHERE IDDesc='".$id."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Supply Effected");';
				echo'window.location.href="OrdersTable.php";';
				echo '</script>';
							}else{
				echo '<script type="application/javascript">';
				echo'alert("Supply Effect Failed");';
				//echo'alert("'.$id.'");';
				echo'window.location.href="OrdersTable.php";';
				echo '</script>';
								}
						 }
						 }
						  ?>  
                </tbody>
                <tfoot>
                <tr>
                  <th>...</th>
                  <th>...</th>
                  <th>.......................................</th>
                  <th>...</th>
                  <th>...</th>
				  <th>...</th>
                  <th>...</th>
				   <th>...</th>
                  <th>...</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://cropprotection.com">Igaaza Creations</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
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