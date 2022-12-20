<?php session_start();

if(isset($_GET['continuetopayments'])){
	$ordercodes="";
	function split_name($name) {
	$name = trim($name);
	$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
	$first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
	return array($first_name, $last_name);
	}
			require_once('connect.php');														
			$sales6 ="SELECT OrderCode,OrderBy FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Confirmed'  and PaymentStatus='Not Paid' order by IDDesc Asc ";
			$result5=mysqli_query($link,$sales6);
			if(mysqli_num_rows($result5) >=1){
			$row5=mysqli_fetch_assoc($result5);
				$ordercodes=$row5['OrderCode'];
				$ordenam=trim($row5['OrderBy']);
				$realarray=split_name($ordenam);
				
				$first_name=$realarray[0];
			    $last_name=$realarray[1];
			$sales7 ="SELECT TotalCost,IDs FROM `bookings` where OrderCode='".$ordercodes."' ";
			$result8=mysqli_query($link,$sales7);
			if(mysqli_num_rows($result8) >=1){
			$row8=mysqli_fetch_assoc($result8);
				$totalamount=$row8['TotalCost'];
				$idsss="Bookings ID No. ".$row8['IDs'];
				$email=$_SESSION['igaazaemail'];
			}
//echo'<script>';
			header('Location:shopping-cart-form.php?productid='.$idsss.'&ammounts='.$totalamount.'&refid='.$ordercodes.'&emails='.$email.'&firstname='.$first_name.'&lastname='.$last_name.'');
//echo'</script>';
}
}
?>