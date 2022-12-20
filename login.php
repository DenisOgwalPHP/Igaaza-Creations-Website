<?php session_start();
if(isset($_POST['logins'])){	
// getting inputs from the form		
	$email = $_POST['email'];
	$password = $_POST['passwords'];
	$ordercode=$_POST['ordercode'];
	$encryptedpassword = md5($password);
	require_once('connect.php');
			$newfetch ="SELECT Fullnames,Password,Email,Telephone FROM `clientregistration` WHERE Email = '".$email."' and ApprovalStatus='Approved'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)==1){
				$staffnames= $row2[0];
				$fetchedpassword = $row2[1];
				$email=$row2[2];
				$tele=$row2[3];
			if( $fetchedpassword ==$encryptedpassword){
				$sales11 ="UPDATE carttemporary SET User='".$email."' where User='".$_SESSION['igaazaemail']."'";
				$results=mysqli_query($link,$sales11);
				
				$sales14 ="UPDATE orders SET OrderByEmail='".$email."',OrderBy='".$staffnames."' ,OrderByPhone='".$tele."' where OrderCode='".$ordercode."'";
				$results=mysqli_query($link,$sales14);
				
				$_SESSION['igaazauser']=$staffnames;
				$_SESSION['igaazaemail']=$email;
				$_SESSION['igaazaTelephone']=$tele;
				echo '<script type="application/javascript">';
				echo'alert("You have Successfully Logged In, You can proceed to  Add A delivery Method and  review order then Checkout");';
				echo'window.location.href="checkout.php";';
				echo '</script>';
				//header('Location: checkout.php');
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Registered Password");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("UserName Does Not exist");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			
	}else{
			header("location:index.php");
			die;
		}
?>