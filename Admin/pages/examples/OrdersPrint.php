<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Igaaza Creations | Orders</title>
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
           <!--<i class="fa fa-globe"> </i>-->
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
                  <th>Quantity</th>
                  <th>Order Date</th>
				  <th>Order By</th>
                  <th>Email</th>
                  <th>Telephone</th>
				  <th>Order Status</th>
				  
                </tr>
				</thead>
               <?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT ProductName,Quantity,OrderDate,OrderStatus,StatusDate,SuppliedBy,OrderBy,OrderByEmail,OrderByPhone,IDDesc FROM `orders` order by IDDesc Desc";
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
				echo "<td>".$row5['OrderStatus']."</td>";
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
                  <p class="lead">Total Orders</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td>
						<?php
require_once('../../Connection/connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(IDDesc) as orders FROM `orders`";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['orders'];
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
