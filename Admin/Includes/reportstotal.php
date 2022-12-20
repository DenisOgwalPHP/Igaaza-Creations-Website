<?php
require_once('connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(IDDesc) as Storys FROM `productdetails` where Approval ='Pending'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['Storys'];
echo $totalmales;

?>