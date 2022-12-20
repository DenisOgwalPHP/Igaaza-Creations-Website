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

  <title>Igaaza | Product Registration </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/CropProtectionLogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #0000FF;
  margin: 2% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}


 /* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* The Close Button */
.close {
  position: absolute;
  right: 20px;
  color: #aaa;
  
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 

</style>
 
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
    <a href="../../Dashboard.php" class="brand-link">
      <img src="../../images/CropProtectionLogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Igaaza Creations</span>
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
		 <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/ProductDetails.php" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product Registration</p>
                </a>
              </li>
         
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
                <a href="../tables/ProductsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/Bookings.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../tables/OrdersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/ClientsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/MembersTable.php" class="nav-link">
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
            <h1>Product Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Product Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Details</h3>
              </div>
             
			    <form action="insertproduct.php" method="post" enctype="multipart/form-data">
				 <div class="card-body">
			   <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
					<input class="form-control" type="text" name= "productname" placeholder="Enter Product name">
               </div>
			   <div class="form-group">
                    <label for="exampleInputEmail1">Manufacturer/Author</label>
					<input class="form-control" type="text" name= "authors" placeholder="Enter Author names">
               </div>
			    <div class="form-group">
                    <label for="exampleInputEmail1">Release/Publication Date</label>
					<input class="form-control" type="text" name= "publicationdate" placeholder="dd/mmm/yyyy">
               </div>
			    <div class="form-group">
                    <label for="exampleInputEmail1">Short Description</label>
					<input class="form-control" type="text" name= "shortdescription" placeholder="Enter Description between 50-100 words">
               </div>
			 <div class="form-group">
                    <label for="exampleInputEmail1">Supplier</label>
					<input class="form-control" type="text" name= "supplier" placeholder="Enter supplier names">
               </div>
			   <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="categories" >
					 <option Value="Books">Books</option>
					  <option Value="Bees Products">Bees Products</option>
					   <option Value="Crafts">Crafts</option>
					    <option Value="Ducks">Ducks</option>
					 <option Value="Magazines">Magazines</option>
                      <option Value="Small Books">Small Books</option>
                      <option Value="Big Books">Big Books</option>
					   <option Value="Cartoon Books">Cartoon Books</option>
					    <option Value="Music">Music</option>
						 <option Value="Videos">Videos</option>
						  <option Value="Films">Films</option>
						   <option Value="Animations">Animations</option>
							 <option Value="Services">Services</option>
                    </select>
                 </div>
			   <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3"  name="description" placeholder="Enter product description..."></textarea>
               </div>
			   <div class="form-group">
                    <label for="exampleInputEmail1">Cost</label>
					<input class="form-control" type="number" name="cost" placeholder="Enter cost of product">
               </div>
			   
                
					<div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename" name="Filename">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 1(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename1" name="Filename1">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 2(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename2" name="Filename2">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 3(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename3" name="Filename3">
                      <label class="custom-file-label" for="exampleInputFile">Product Attachment</label>
					</div>
                  </div>
				   </div>
				 <div class="card-footer">
                  <button type="submit" name="productupload" class="btn btn-primary">Submit</button>
				</div> 
				  </form>
				
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Recent Records</h3>
              </div>
             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Names</th>
                  <th>Supplier</th>
                  <th>Category</th>
                  
                </tr>
                </thead>
                <tbody>
				<?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT ProductName,Supplier,Category FROM `productdetails` order by IDDesc Desc LIMIT 10";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){


                 echo"<tr>";
				 echo "<td>".$row5['ProductName']."</td>";
				 echo "<td>".$row5['Supplier']."</td>";
                 echo "<td>".$row5['Category']."</td>";
                echo"</tr>";
				}
				?>
                
                </tbody>
                <tfoot>
               <tr>
                  <th><button id="myBtn" name="addimage" value="" class="btn btn-block btn-warning">Edit Images</button></th>
                   <th><button id="myBtn2" name="addinfo" value="" class="btn btn-block btn-primary">Edit Details</button></th>
                  <th>X</th>
                </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.card -->
           
		   
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="http://cropprotection.com">igaazacreations</a>.</strong> All rights
    reserved.
 </footer>
 <!---<Script type="text/javascript">	
		function loadhotels(productnames){
		//var d5=document.getElementById('categories').value;
		//var d6=document.getElementById('facility').value;
	    //window.history.pushState('', 'Registration', '/register.php?category='+d5);
		var html = $.ajax({
        type: "POST",
        url: "AJAX.php",
        data: "productnames=" +productnames,
        async: false
		}).responseText;
		if(html){
			$("#productids").html(html);
		}
		}
		onchange="loadhotels(this.value)"
		 </Script>	-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<form action="updateimages.php" method="post" enctype="multipart/form-data">
					<p>&nbsp;</p>	
					<select class="form-control" id="productnames" name="productnames" required>
                        <?php require_once('../../Connection/connect.php');
						$sales9 ="SELECT Distinct ProductName FROM `productdetails`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="Other">Select Product</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['ProductName'].'">'.$row9['ProductName'].'</option>';
						}	?>			
                        </select>
					<p>&nbsp;</p>
					
						
					<div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename" name="Filename">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 1(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  <p>&nbsp;</p>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename1" name="Filename1">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 2(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  <p>&nbsp;</p>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename2" name="Filename2">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 3(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  <p>&nbsp;</p>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename3" name="Filename3">
                      <label class="custom-file-label" for="exampleInputFile">Product Attachment</label>
					</div>
                  </div>
				  <p>&nbsp;</p>
	 <Button type="submit" name="updateimages" id="updateimages" class="btn btn-block btn-success" >SUBMIT</Button>
	 </form>
  </div>

</div>

<div id="myModal2" class="modal2">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<form action="updatedetails.php" method="post" >
					<p>&nbsp;</p>	
					<select class="form-control" id="productnames" name="productnames" required>
                        <?php require_once('../../Connection/connect.php');
						$sales9 ="SELECT Distinct ProductName FROM `productdetails`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="Other">Select Product</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['ProductName'].'">'.$row9['ProductName'].'</option>';
						}	?>			
                        </select>
					<p>&nbsp;</p>
					
						
					<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="productoption" name="productoption" required>
					 <option value="">--Select what you want to change--</option>
						<option value="Category">Category</option>
						<option value="ShortDiscription">Short Discription</option>
						<option value="Cost">Cost</option>
						<option value="Rating">Rating</option>
						<option value="Production">Production/Publish Date</option>
						<option value="Manufacturer">Manufacturer/ Author</option>	
						<option value="Description">Description</option>							
                        </select>
					</div>
                  </div>
				  <p>&nbsp;</p>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="text" class="form-control" id="realvalue" placeholder="Add the Update Details Here" name="realvalue" required>
					</div>
                  </div>
				  
				  <p>&nbsp;</p>
				<Button type="submit" name="updatedetails" id="updatedetails" class="btn btn-block btn-success" >SUBMIT</Button>
				</form>
  </div>
</div>

<script>

var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  else if (event.target == modal2) {
    modal2.style.display = "none";
  }
} 




</script>


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
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
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