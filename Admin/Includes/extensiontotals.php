<?php
require_once('connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(IDDesc) as members FROM `orders` where SuppliedBy = 'Pending'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['members'];
echo $totalmales;

?>