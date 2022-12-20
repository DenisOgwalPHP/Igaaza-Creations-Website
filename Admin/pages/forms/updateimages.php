<?php
session_start();
if(isset($_SESSION['igaazauser'])){
	}
	else{
		
		}

if(isset($_REQUEST['updateimages'])){	
// getting inputs from the form	
    $productname = $_POST['productnames'];
    $fileName = $_FILES['Filename']['name'];
	$fileName1 = $_FILES['Filename1']['name'];
	$fileName2 = $_FILES['Filename2']['name'];
	$fileName3 = $_FILES['Filename3']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
	$temp1 = explode(".", $_FILES["Filename1"]["name"]);
	$temp2 = explode(".", $_FILES["Filename2"]["name"]);
	$temp3 = explode(".", $_FILES["Filename3"]["name"]);
    $newfilename =$productname. '.' . end($temp);
	$newfilename1 =$productname. '1.' . end($temp1);
	$newfilename2 =$productname. '2.' . end($temp2);
	$newfilename3 =$productname. '.' . end($temp3);
	$target = '../../../img/';
	$target2 = '../../../Attachment/';
	$fileTarget = $target.$newfilename; 
	$fileTarget1 = $target.$newfilename1;   
	$fileTarget2 = $target.$newfilename2;
	$fileTarget3 = $target2.$newfilename3;
	
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$tempFileName1 = $_FILES["Filename1"]["tmp_name"];
	$tempFileName2 = $_FILES["Filename2"]["tmp_name"];
	$tempFileName3 = $_FILES["Filename3"]["tmp_name"];
	
	 $result = move_uploaded_file($tempFileName,$fileTarget);
	 $result1 = move_uploaded_file($tempFileName1,$fileTarget1);
	 $result2 = move_uploaded_file($tempFileName2,$fileTarget2);
	 $result3 = move_uploaded_file($tempFileName3,$fileTarget3);
	
	$finalimageurl=$fileTarget;
	echo '<script type="application/javascript">';
				echo'alert("Successfuly Uploaded");';
				echo'window.location.href="ProductDetails.php";';
				echo '</script>';		
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="ProductDetails.php";';
				echo '</script>';
			die;
		}
?>