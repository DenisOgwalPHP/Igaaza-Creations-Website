<?php
session_start();
if(isset($_SESSION['igaazauser'])){
	}
	else{
		
		}

if(isset($_REQUEST['UpdateProductsupload'])){	
// getting inputs from the form	
	$productid = $_GET['Edit'];
    $productname = $_POST['productname'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$productname. '.' . end($temp);
	
	$target = "ServiceProviders/";	
	$fileTarget = $target.$newfilename;     
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	 $result = move_uploaded_file($tempFileName,$fileTarget);

	$supplier = $_POST['supplier'];
	$description = $_POST['description'];
	$cost = $_POST['cost'];
	$category=$_POST['categories'];
	$imageurl="http://goodwillwomenspulse.org/AndroidFiles/";
	$finalimageurl=$imageurl.$fileTarget;
	
	require_once('../../connection/connect.php');
	
	$query = "UPDATE `productdetails` SET ProductName='".$productname."',Supplier='".$supplier."',Category='".$category."',Description='".$description."',Cost='".$cost."' where IDDesc='".$productid."'";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Product successfully updated");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Product update Failed");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="ProductsTable.php";';
				echo '</script>';
			die;
		}
?>