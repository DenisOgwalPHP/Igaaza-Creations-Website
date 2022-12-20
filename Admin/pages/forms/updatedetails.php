<?php
session_start();
if(isset($_SESSION['igaazauser'])){
	}
	else{
		
		}

if(isset($_REQUEST['updatedetails'])){	
// getting inputs from the form	
	$realvalue=$_POST['realvalue'];
	$productoption = $_POST['productoption'];
	$productnames = $_POST['productnames'];	
	require_once('../../Connection/connect.php');
	if($productoption=="Category"){
	 $query = "UPDATE `productdetails` SET Category='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="ShortDiscription"){
	 $query = "UPDATE `productdetails` SET ShortDescription='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="Cost"){
	 $query = "UPDATE `productdetails` SET Cost='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="Rating"){
	 $query = "UPDATE `productdetails` SET Rating='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="Production"){
	 $query = "UPDATE `productdetails` SET PublicationDate='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="Manufacturer"){
	 $query = "UPDATE `productdetails` SET Author='".$realvalue."' WHERE ProductName='".$productnames."'";
	}else if($productoption=="Description"){
	 $query = "UPDATE `productdetails` SET Description='".$realvalue."' WHERE ProductName='".$productnames."'";
	}           
			$result4=mysqli_query($link,$query);
			
			if($result4){
				echo '<script type="application/javascript">';
				echo'alert("Product successfully Updated");';
				echo'window.location.href="ProductDetails.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Product Update Failed");';
				echo'window.location.href="ProductDetails.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="ProductDetails.php";';
				echo '</script>';
			die;
		}
?>