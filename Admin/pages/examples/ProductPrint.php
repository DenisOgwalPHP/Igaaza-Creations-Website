<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Igaaza Creations | Products</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->
 <link rel="shortcut icon" type="image/x-icon" href="../../images/CropProtectionLogo.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
           <img src="../../images/CropProtectionLogo.png"/>
                    <small class="float-right">Date: <?php 
					$dates=date("Y-m-d");
					echo $dates?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
                    <thead>
                    <tr>
                 <th>Product Name</th>
                  <th>Registration Date</th>
                  <th>Supplier</th>
				  <th>Category</th>
                  <th>Description</th>
                  <th>Cost</th>
                </tr>
				</thead>
               <?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT ProductName,RegistrationDate,Supplier,Category,Description,Cost,Availability,Approval,IDDesc FROM `productdetails` order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                 echo"<tr>";
				 echo "<td>".$row5['ProductName']."</td>";
				 echo "<td>".$row5['RegistrationDate']."</td>";
                 echo "<td>".$row5['Supplier']."</td>";
				 echo "<td>".$row5['Category']."</td>";
				 echo "<td>".$row5['Description']."</td>";
				 echo "<td>".$row5['Cost']."</td>";		 
				 
                echo"</tr>";
				}
				?>
                </tbody>
                <tfoot>
                <tr>
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
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <div class="col-6">
                  <p class="lead">Total Products</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td>
						<?php
require_once('../../Connection/connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(IDDesc) as productcount FROM `productdetails`";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['productcount'];
echo $totalmales;
?> 
						
						</td>
                      </tr>
                    </table>
                  </div>
                </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
