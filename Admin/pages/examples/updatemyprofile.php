<?php
session_start();
if(isset($_SESSION['aifuadminuser'])){
	}
	else{
		
		}

if(isset($_REQUEST['updateprofile'])){	
// getting inputs from the form	
    $inputName = $_POST['inputName'];
	$inputphone = $_POST['inputphone'];
	$inputlocation = $_POST['inputlocation'];
	$inputdob = $_POST['inputdob'];
	$inputEmail=$_POST['inputEmail'];
	$inputpassword=$_POST['inputpassword'];
	$encryptedpassword = md5($inputpassword);
	require_once('../../connection/connect.php');
	
	$query = "UPDATE `registration` SET FullNames='".$inputName."',Password='".$encryptedpassword."',Telephone='".$inputphone."',DOB='".$inputdob."',Address='".$inputlocation."' where Email='".$inputEmail."'";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Profile successfully updated");';
				echo'window.location.href="profile.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Profile update Failed");';
				echo'window.location.href="profile.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="profile.php";';
				echo '</script>';
			die;
		}
?>