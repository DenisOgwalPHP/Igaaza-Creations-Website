<?php

if(isset($_GET['email'])){	
$emails=$_GET['email'];
				require_once('connect.php');
			$query = "UPDATE  `clientregistration` SET ApprovalStatus='Approved' where Email='".$emails."'";
			$results=mysqli_query($link,$query);
			if($results){
				
				echo '<script type="application/javascript">';
				echo'window.location.href="checkout.php";';
				echo '</script>';

				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be Approved");';
				echo'window.location.href="checkout.php";';
				echo '</script>';
			}
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("Email not found");';
				echo'window.location.href="checkout.php";';
				echo '</script>';
}
	
?>