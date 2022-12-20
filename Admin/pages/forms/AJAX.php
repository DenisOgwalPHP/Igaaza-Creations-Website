<?php

	
	
	require_once('../../Connection/connect.php');
	$sales9 ="SELECT Distinct IDDesc FROM `productdetails`";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="Other">Other</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['IDDesc'].'">'.$row9['IDDesc'].'</option>';
	}				
?>