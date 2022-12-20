<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_SESSION['igaazauser'])){
	}
	else{
		
		}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Whishlist || Igaaza Creations</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- Font-Awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
		<!-- Flaticon css -->
        <link rel="stylesheet" href="css/flaticon.css">
		<!-- venobox css -->
        <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
		<!-- nivo slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--Header Area Start-->
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="header-logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <a href="my-account.php"><i class="flaticon-people"></i></a>
                                </li>
                                <li class="shoping-cart">
                                    <a href="cart.php">
                                        <i class="flaticon-shop"></i>
                                        <span><?php
									if(isset($_SESSION['igaazaemail'])){
									require_once('connect.php');					
									$sales12 ="SELECT COUNT(IDs) as Carttotals from carttemporary where User='".$_SESSION['igaazaemail']."' and AddTo='Cart'";
									$resultss=mysqli_query($link,$sales12);
									if($resultss)
									{
										if($row9=mysqli_fetch_assoc($resultss)){
										Echo $row9['Carttotals'];
										}
									}
									}else{
										
										echo 0;
									}
									?></span>
                                    </a>
                                    <div class="add-to-cart-product">
                                        
                                        <?php
									if(isset($_SESSION['igaazauser'])){
									require_once('connect.php');
									$sales7 ="SELECT Product,Quantity,Cost,ProductID,IDs FROM `carttemporary` where User='".$_SESSION['igaazaemail']."' and AddTo='Cart' order by IDs ASC";
									$result8=mysqli_query($link,$sales7);
									while($row8=mysqli_fetch_assoc($result8)){
										$rates=$row8['Cost']/$row8['Quantity'];
										$productidss=$row8['ProductID'];
                                        echo"<div class='cart-product'>";
                                            echo"<div class='cart-product-image'>";
                                                echo"<a href='single-product.php'>";
												require_once('connect.php');
												$sales9 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$productidss."'";
												$result10=mysqli_query($link,$sales9);
												if($row9=mysqli_fetch_assoc($result10)){
                                                    echo"<img src='img/".$row9['ProductImage']."' alt='' Style='Height:80px;Width:104px;' >";
												}
                                                echo"</a>";
                                            echo"</div>";
                                            echo"<div class='cart-product-info'>";
                                                echo"<p>";
                                                    echo"<span>".$row8['Quantity']."</span>";
                                                    echo"x";
                                                    echo"<a href='single-product.php'>".$row8['Product']."</a>";
                                                echo"</p>";
                                                /*echo"<a href='single-product.php'>".$row8['Product']."</a>";*/
                                                echo"<span class='cart-price'>Shs.".$row8['Cost']."</span>";
                                            echo"</div>";
                                            echo"<div class='cart-product-remove'>";
                                                echo"<i class='fa fa-times'></i>";
                                            echo"</div>";
                                        echo"</div>";
									}
									}
                                       ?>
                                        <div class="total-cart-price">
                                            <div class="cart-product-line fast-line">
                                                <span>Shipping</span>
                                                <span class="free-shiping">shs.0</span>
                                            </div>
                                            <div class="cart-product-line">
                                                <span>Total</span>
                                                <span class="total"><?php
											if(isset($_SESSION['igaazauser'])){
											require_once('connect.php');					
											$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['igaazaemail']."' and AddTo='Cart'";
											$results=mysqli_query($link,$sales11);
											if($results)
											{
												if($row9=mysqli_fetch_assoc($results)){
												Echo "Shs. ".$row9['Carttotal'];
												}
											}
													}
													else{
														Echo "Shs. 0";
													}
											?></span>
                                            </div>
                                        </div>
                                        <div class="cart-checkout">
                                            <a href="checkout.php">
                                                Check out
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="col-md-9 col-sm-12 hidden-xs">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                   <li><a href="Services.php">Our Services</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li class="active"><a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.php">Cart Page</a></li>
                                            <li><a href="checkout.php">Check Out</a></li>
                                            <li><a href="checkout.php">Login</a></li>
                                           
                                            <li><a href="wishlist.php">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">CONTACT</a></li>
									<?php
									if($_SESSION['igaazauser']=="Guest"){
										echo "<li><a href='checkout.php'>Login</a>";
									}else{
										echo "<li><a href='logout.php'>Logout</a>";
									 echo "<ul class='sub-menu'>".$_SESSION['igaazauser']."</ul>";
									echo "</li>";
										
									}
									?>
                                </ul>
                            </nav>
                        </div>                        
                    </div>
                    <div class="col-md-1 hidden-sm">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <a href="my-account.php"><i class="flaticon-people"></i></a>
                                </li>
                                <li class="shoping-cart">
                                    <a href="cart.php">
                                        <i class="flaticon-shop"></i>
                                        <span><?php
									if(isset($_SESSION['igaazaemail'])){
									require_once('connect.php');					
									$sales12 ="SELECT COUNT(IDs) as Carttotals from carttemporary where User='".$_SESSION['igaazaemail']."' and AddTo='Cart'";
									$resultss=mysqli_query($link,$sales12);
									if($resultss)
									{
										if($row9=mysqli_fetch_assoc($resultss)){
										Echo $row9['Carttotals'];
										}
									}
									}else{
										
										echo 0;
									}
									?></span>
                                    </a>
                                    <div class="add-to-cart-product">
                                        
                                        <?php
									if(isset($_SESSION['igaazauser'])){
									require_once('connect.php');
									$sales7 ="SELECT Product,Quantity,Cost,ProductID,IDs FROM `carttemporary` where User='".$_SESSION['igaazaemail']."' and AddTo='Cart' order by IDs ASC";
									$result8=mysqli_query($link,$sales7);
									while($row8=mysqli_fetch_assoc($result8)){
										$rates=$row8['Cost']/$row8['Quantity'];
										$productidss=$row8['ProductID'];
                                        echo"<div class='cart-product'>";
                                            echo"<div class='cart-product-image'>";
                                                echo"<a href='single-product.php'>";
												require_once('connect.php');
												$sales9 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$productidss."'";
												$result10=mysqli_query($link,$sales9);
												if($row9=mysqli_fetch_assoc($result10)){
                                                    echo"<img src='img/".$row9['ProductImage']."' alt='' Style='Height:80px;Width:104px;' >";
												}
                                                echo"</a>";
                                            echo"</div>";
                                            echo"<div class='cart-product-info'>";
                                                echo"<p>";
                                                    echo"<span>".$row8['Quantity']."</span>";
                                                    echo"x";
                                                    echo"<a href='single-product.php'>".$row8['Product']."</a>";
                                                echo"</p>";
                                                /*echo"<a href='single-product.php'>".$row8['Product']."</a>";*/
                                                echo"<span class='cart-price'>Shs.".$row8['Cost']."</span>";
                                            echo"</div>";
                                            echo"<div class='cart-product-remove'>";
                                                echo"<i class='fa fa-times'></i>";
                                            echo"</div>";
                                        echo"</div>";
									}
									}
                                       ?>
                                        <div class="total-cart-price">
                                            <div class="cart-product-line fast-line">
                                                <span>Shipping</span>
                                                <span class="free-shiping">shs.0</span>
                                            </div>
                                            <div class="cart-product-line">
                                                <span>Total</span>
                                                <span class="total"><?php
											if(isset($_SESSION['igaazauser'])){
											require_once('connect.php');					
											$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['igaazaemail']."' and AddTo='Cart'";
											$results=mysqli_query($link,$sales11);
											if($results)
											{
												if($row9=mysqli_fetch_assoc($results)){
												Echo "Shs. ".$row9['Carttotal'];
												}
											}
													}
													else{
														Echo "Shs. 0";
													}
											?></span>
                                            </div>
                                        </div>
                                        <div class="cart-checkout">
                                            <a href="checkout.php">
                                                Check out
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Area End-->
		<!-- Mobile Menu Start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mobile-menu">
							<nav>
                                <ul id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                   <li><a href="Services.php">Our Services</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.php">Cart Page</a></li>
                                            <li><a href="checkout.php">Check Out</a></li>
                                            <li><a href="checkout.php">Login</a></li>
                                           
                                            <li><a href="wishlist.php">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">CONTACT</a></li>
									<?php
									if($_SESSION['igaazauser']=="Guest"){
										echo "<li><a href='checkout.php'>Login</a>";
									}else{
										echo "<li><a href='logout.php'>Logout</a>";
									 echo "<ul class='sub-menu'>".$_SESSION['igaazauser']."</ul>";
									echo "</li>";
										
									}
									?>
                                </ul>
                            </nav>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!-- Mobile Menu End -->   
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>WISH LIST</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.php">Home</a>
						        </li>
						        <li>Wish List</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
		<!-- Cart Area Start -->
		<div class="shopping-cart-area section-padding">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
                        <div class="wishlist-table-area table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove">Remove</th>
										<th class="product-edit">Add To Cart</th>
                                        <th class="product-image">Image</th>
                                        <th class="t-product-name">Product Name</th>
                                        <th class="product-unit-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								
								if(isset($_SESSION['igaazauser'])){
								require_once('connect.php');
								$sales7 ="SELECT Product,Quantity,Cost,ProductID,IDs FROM `carttemporary`  where User='".$_SESSION['igaazaemail']."' and AddTo='Wishlist' order by IDs ASC ";
								$result8=mysqli_query($link,$sales7);
								while($row8=mysqli_fetch_assoc($result8)){
									$rates=$row8['Cost']/$row8['Quantity'];
									$productidss=$row8['ProductID'];
									echo"<form method='GET'>";
                                    echo"<tr>";
                                        echo"<td class='product-remove'>";
                                            echo"<a href='#'>";
                                                echo"<button class='flaticon-delete' name='deletes' id='deletes' value='".$row8['IDs']."'></button>";
                                            echo"</a>";
                                        echo"</td>";
										echo"<td class='product-edit'>";
                                            echo"<p>";
                                                echo"<button class='cart-btn btn-default' name='updates' id='updates' value='".$row8['IDs']."' >Add</button>";
                                            echo"</p>";
                                        echo"</td>";
                                        echo"<td class='product-image'>";
                                            echo"<a href='#'>";
											require_once('connect.php');
											$sales9 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$productidss."'";
											$result10=mysqli_query($link,$sales9);
											if($row9=mysqli_fetch_assoc($result10)){
                                                echo"<img src='img/".$row9['ProductImage']."' alt='' style='Height:104px; Width:90px;'>";
											}
                                            echo"</a>";
                                        echo"</td>";
                                        echo"<td class='t-product-name'>";
                                            echo"<h3>";
                                                echo"<a href='#'>".$row8['Product']."</a>";
                                            echo"</h3>";
                                        echo"</td>";
                                        
                                        echo"<td class='product-unit-price'>";
                                            echo"<p>Shs. ".$rates."</p>";
											echo"<input class='mtext-104 cl3 txt-center num-product' type='hidden' name='singlecost' id='singlecost' value='".$rates."'>";
                                        echo"</td>";
                                        echo"<td class='product-quantity product-cart-details'>";
											echo"<input type='number' name='numproduct' id='numproduct' value='".$row8['Quantity']."'>";
										echo"</td>";
                                        echo"<td class='product-quantity'>";
											echo"<p>Shs. ".$row8['Cost']."</p>";
										echo"</td>";
                                    echo"</tr>";
								}
								}
								?>
								
				
                                </tbody>
                            </table>
                        </div>	
                        <div class="shopingcart-bottom-area">
                            <a class="left-shoping-cart" href="shop.php">CONTINUE SHOPPING</a>
                            <div class="shopingcart-bottom-area pull-right">
								<!--<a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
								<a class="right-shoping-cart" href="#">UPDATE SHOPPING CART</a>-->
							</div>
                        </div>	                
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Cart Area End -->
        <!-- Discount Area Start -->
		</form>
		<?php
				if(isset($_SESSION['igaazauser'])){
				if(isset($_GET['deletes'])){
					$id=$_GET['deletes'];	
                        if(isset($id)){
				$sales6 ="DELETE  FROM carttemporary WHERE IDs='".$id."' and User='".$_SESSION['igaazaemail']."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Deleted");';
				echo'window.location.href="wishlist.php";';
				echo '</script>';
				}
				}
				}
				}else{}
				
				if(isset($_SESSION['igaazauser'])){
				if(isset($_GET['updates']))
				{
					$id=$_GET['updates'];
					$quantityss=$_GET['numproduct'];
					$costss=$_GET['singlecost']*$quantityss;
				require_once('connect.php');				
				$sales11 ="UPDATE carttemporary SET AddTo='Cart' WHERE IDs='".$id."' and User='".$_SESSION['igaazaemail']."'";
				$results=mysqli_query($link,$sales11);
				if($results)
				{
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Added to Cart");';
				echo'window.location.href="cart.php";';
				echo '</script>';
				}
							
				}	
				}else{}
				
//session_start();

				if(isset($_GET['finalsubmission'])){	
				if(isset($_SESSION['igaazauser']) && !empty($_SESSION['igaazauser'])){
				require_once('connect.php');
				$sales6 ="SELECT User,Product,Quantity,Cost,ProductID FROM `carttemporary` where User='".$_SESSION['igaazaemail']."' ";
				$result5=mysqli_query($link,$sales6);
				if(mysqli_num_rows($result5) >=1){
				while($row5=mysqli_fetch_assoc($result5)){
				$orderammount=$row5['Cost'];
				$orderproduct=$row5['Product'];
				$orderuser=$row5['User'];
				//$orderproductsize=$row5['Size'];
				//$orderproductcolor=$row5['Color'];
				$orderproductquantity=$row5['Quantity'];
				$orderproductid=$row5['ProductID'];

				$orderuser = $_SESSION['igaazauser'];
				$orderemail =$_SESSION['igaazaemail'];
				$orderphone =$_SESSION['igaazaTelephone'];
				$query = "INSERT INTO `orders` (OrderBy,OrderByEmail,OrderByPhone,OrderCost,ProductName,Quantity,TransactionTrackingID) VALUES('$orderuser','$orderemail','$orderphone','$orderammount','$orderproduct','$orderproductquantity','$orderproductid')";
				$results=mysqli_query($link,$query);
				
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been Registered, you can proceed to Checkout");';
				echo'window.location.href="checkout.php"';
				echo '</script>';
	
				}

				$sales7 ="DELETE  FROM carttemporary where User='".$_SESSION['igaazaemail']."'";
				$resultss=mysqli_query($link,$sales7);
				require 'PHPMailer/src/Exception.php';
				require 'PHPMailer/src/PHPMailer.php';
				require 'PHPMailer/src/SMTP.php';			
								
								
					$to = ''.$orderemail;
					$subject = 'Order Made';
					$message = 'Hi. Some Order has been made, Check your Website.';
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
					$headers = 'From:  info@igaaza.com ' . "\r\n" .
						'Reply-To: no-reply@igaaza.com ' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

					echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been Registered, you can proceed to Checkout");';
				echo'window.location.href="checkout.php"';
				echo '</script>';
				
			/*}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Order Could not be registered");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}*/
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("You dont have any Product in your Cart");';
				echo'window.location.href="index.php";';
				echo '</script>';
}
}else{
			echo '<script type="application/javascript">';
				echo'alert("Unsuccessful, Login First.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
		}
?>
        <!-- Discount Area End -->	
		<!-- Footer Area Start -->
<footer>
		    <div class="footer-top-area">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-3 col-sm-8">
		                    <div class="footer-left">
		                        <a href="index.php">
		                            <img src="img/logo-2.png" alt="">
		                        </a>
		                        <p>You can Visit us at our Home Below or even email or reach us via our phone</p>
		                        <ul class="footer-contact">
		                            <li>
		                                <i class="flaticon-location"></i>
		                                Kisaasi,Kampala Uganda.
		                            </li>
		                            <li>
		                                <i class="flaticon-technology"></i>
		                                Tel: +256 702 183 361
		                            </li>
		                            <li>
		                                <i class="flaticon-web"></i>
		                                info@igaaza.com
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 col-sm-4">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Information</h2>
		                        <ul class="footer-list">
		                            <li><a href="about.php">About Us</a></li>
		                            <li><a href="deliveryinfo.php">Delivery Information</a></li>
		                            <li><a href="privacyandpolicy.php">Privacy & Policy</a></li>
		                            <li><a href="termsandconditions.php">Terms & Conditions</a></li>
									 <li><a href="disclaimer.php">Disclaimer</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 hidden-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">My Account</h2>
		                        <ul class="footer-list">
		                            <li><a href="checkout.php">Login</a></li>
		                            <li><a href="cart.php">My Cart</a></li>
		                            <li><a href="wishlist.php">Wishlist</a></li>
		                            <li><a href="checkout.php">Checkout</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 hidden-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Links</h2>
		                        <ul class="footer-list">
		                            <li><a href="index.php">Home</a></li>
		                            <li><a href="Services.php">Services</a></li>
		                            <li><a href="about.php">About Us</a></li>
		                            <li><a href="shop.php">Shop</a></li>
		                            <li><a href="contact.php">Contact</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-8">
		                     <div class="single-footer footer-newsletter">
		                        <h2 class="footer-title">Our Newsletter</h2>
		                        <p>Subscribe to our news letter by inputting your Email Address to get constant updates of our news letter and notifications.</p>
		                        <form method='post' action='mailing2.php'>
		                            <div>
		                                <input placeholder="email address" type="text" name="emails" id=="emails" required>
		                            </div>
		                            <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
		                            <i class="flaticon-networking"></i>
		                        </form>
		                        <ul class="social-icon">
		                            <li>
		                                <a href="https://www.facebook.com/igaazaproducts/" target="blank">
		                                    <i class="flaticon-social"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://twitter.com/IgaazaC" target="blank">
										<i class="fab fa-twitter-square"></i>
		                                    <!--<i class="flaticon-social-3"></i>-->
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.instagram.com/igaazacreations/" target="blank">
		                                    <i class="flaticon-social-2"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.youtube.com/channel/UC6iDfRVmJML57_RKtIy52Pw" target="blank">
		                                    <i class="flaticon-video"></i>
		                                </a>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 col-sm-4 visible-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Shop</h2>
		                        <ul class="footer-list">
		                            <li><a href="#">Orders & Returns</a></li>
		                            <li><a href="#">Search Terms</a></li>
		                            <li><a href="#">Advance Search</a></li>
		                            <li><a href="#">Affiliates</a></li>
		                            <li><a href="#">Group Sales</a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="footer-bottom">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
                            <div class="footer-bottom-left pull-left">
                                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <span>Igaaza Creations LTD</span>. Design By: <a href="http://essentialsystems.atwebpages.com" target="blank">Eng. Denis Ogwal</a></p>
                            </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="footer-bottom-right pull-right">
		                        <img src="img/paypal.png" alt="">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		<!-- Footer Area End -->
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/quick-view.jpg">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>Frame Princes Cut Diamond</h1>
                                    <div class="price-box">
                                        <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                                    </div>
                                    <a href="product-details.php" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->			
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- jquery Counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>	
		<!-- jquery countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- jquery countdown js -->
        <script type="text/javascript" src="venobox/venobox.min.js"></script>
		<!-- jquery Meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>	
		<script>
			new WOW().init();
		</script>
		<!-- scrollUp JS -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- Nivo slider js -->
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>