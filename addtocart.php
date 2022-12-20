<?php session_start();
if(isset($_GET['addtocart'])){	
    $orderid = $_GET['detailid'];
	require_once('connect.php');
$sales6 ="SELECT Cost,ProductName FROM `productdetails` where IDDesc='".$orderid."'";
$result5=mysqli_query($link,$sales6);
if($row5=mysqli_fetch_assoc($result5)){
$orderammount=$row5['Cost'];
$orderproduct=$row5['ProductName'];
}
	$orderquantity = $_GET['numproduct'];
	//$ordersize = $_GET['sizes'];
	//$ordercolor = $_GET['colors'];
	$orderammounts = $orderquantity * $orderammount;
	$orderuser = $_SESSION['igaazaemail'];
			$query = "INSERT INTO `cartTemporary` (User,Product,Quantity,Cost,productID,AddTo) VALUES('$orderuser','$orderproduct','$orderquantity','$orderammounts','$orderid','Cart')";
			$results=mysqli_query($link,$query);
			if($results){		
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Product has been successfully Added to Cart, you can proceed to Cart");';
				echo'window.location.href="cart.php"';
				echo '</script>';
				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Product Could not be Added to Cart");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}
			
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
?>