<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_SESSION['igaazauser']))
{
	}
	else{
		
		}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Checkout || Igaaza Creations</title>
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
		<style>
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #FFFFFF;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}
/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

 /* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* The Modal (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* The Modal (background) */
.modal4 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #0000FF; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* The Close Button */
.close {
  position: absolute;
  right: 20px;
  color: #aaa;
  
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
</style>
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
					       <h2>Checkout List</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.php">Home</a>
						        </li>
						        <li>Checkout List</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
        <!-- Check Out Area Start -->
        <div class="check-out-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										   <span>1</span>
										   Checkout Method
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-6 col-sm-6">
                                                <div class="checkout-collapse-inner">
                                                    <h2 class="collapse-title">CHECKOUT AS A GUEST OR REGISTER</h2>
                                                    <h4 class="collapse-sub-title">Register with us for future convenience:</h4>
                                                    <form method="GET" action="checkout.php">
                                                        <div class="check-register">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-minus"></i> <input type="radio" name="registercheck" value="Checkout as Guest"><label for="Checkout as Guest">Checkout as Guest</label></a>          
                                                        </div>
                                                        <div class="check-register">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-minus"></i><input type="radio" name="registercheck" value="Register" >
                                                            <label for="Register">Register</label></a>
                                                            <!---->
                                                        </div>													
                                                   </form>
                                                    <p>Register and save time!</p>
                                                    <p>Register with us for future convenience:</p>
                                                    <p>Fast and easy check out</p>
                                                    <p>Easy access to your order history and status</p>
                                                </div>
											</div>
											<div class="col-md-6 col-sm-6">
											<div class="checkout-collapse-inner">
												<h2 class="collapse-title">LOGIN</h2>
												<h4 class="collapse-sub-title">Already registered?</h4>
												<p class="login-info">Please log in below:</p>
												<form action="login.php" method="POST">
													<div class="form-row">
														<input id="email" type="Email" name="email" placeholder="Email Address*"/>
														<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
													</div>
													<div class="form-row">
														<input id="passwords" type="Password" name="passwords" placeholder="Password*"/>
													</div>	
													<div class="check-register login-button">
														<!--s<a href="#">forgot your password?</a>-->
														<input class="btn btn-default" type="submit" name="logins" id="logins" value="LOGIN"/>
													</div>												
												</form>
											</div>
											</div>
										</div>
									</div>
								</div>                                
                            </div>
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										   <span>2</span>
										   Billing Information
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
											<form method="GET" action="checkout.php">
												<div class="shop-select">
													<label>Country <span class="required">*</span></label>
													<select name="country" required>
														<option value="Afganistan">Afghanistan</option>
													   <option value="Albania">Albania</option>
													   <option value="Algeria">Algeria</option>
													   <option value="American Samoa">American Samoa</option>
													   <option value="Andorra">Andorra</option>
													   <option value="Angola">Angola</option>
													   <option value="Anguilla">Anguilla</option>
													   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
													   <option value="Argentina">Argentina</option>
													   <option value="Armenia">Armenia</option>
													   <option value="Aruba">Aruba</option>
													   <option value="Australia">Australia</option>
													   <option value="Austria">Austria</option>
													   <option value="Azerbaijan">Azerbaijan</option>
													   <option value="Bahamas">Bahamas</option>
													   <option value="Bahrain">Bahrain</option>
													   <option value="Bangladesh">Bangladesh</option>
													   <option value="Barbados">Barbados</option>
													   <option value="Belarus">Belarus</option>
													   <option value="Belgium">Belgium</option>
													   <option value="Belize">Belize</option>
													   <option value="Benin">Benin</option>
													   <option value="Bermuda">Bermuda</option>
													   <option value="Bhutan">Bhutan</option>
													   <option value="Bolivia">Bolivia</option>
													   <option value="Bonaire">Bonaire</option>
													   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
													   <option value="Botswana">Botswana</option>
													   <option value="Brazil">Brazil</option>
													   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
													   <option value="Brunei">Brunei</option>
													   <option value="Bulgaria">Bulgaria</option>
													   <option value="Burkina Faso">Burkina Faso</option>
													   <option value="Burundi">Burundi</option>
													   <option value="Cambodia">Cambodia</option>
													   <option value="Cameroon">Cameroon</option>
													   <option value="Canada">Canada</option>
													   <option value="Canary Islands">Canary Islands</option>
													   <option value="Cape Verde">Cape Verde</option>
													   <option value="Cayman Islands">Cayman Islands</option>
													   <option value="Central African Republic">Central African Republic</option>
													   <option value="Chad">Chad</option>
													   <option value="Channel Islands">Channel Islands</option>
													   <option value="Chile">Chile</option>
													   <option value="China">China</option>
													   <option value="Christmas Island">Christmas Island</option>
													   <option value="Cocos Island">Cocos Island</option>
													   <option value="Colombia">Colombia</option>
													   <option value="Comoros">Comoros</option>
													   <option value="Congo">Congo</option>
													   <option value="Cook Islands">Cook Islands</option>
													   <option value="Costa Rica">Costa Rica</option>
													   <option value="Cote DIvoire">Cote DIvoire</option>
													   <option value="Croatia">Croatia</option>
													   <option value="Cuba">Cuba</option>
													   <option value="Curaco">Curacao</option>
													   <option value="Cyprus">Cyprus</option>
													   <option value="Czech Republic">Czech Republic</option>
													   <option value="Denmark">Denmark</option>
													   <option value="Djibouti">Djibouti</option>
													   <option value="Dominica">Dominica</option>
													   <option value="Dominican Republic">Dominican Republic</option>
													   <option value="East Timor">East Timor</option>
													   <option value="Ecuador">Ecuador</option>
													   <option value="Egypt">Egypt</option>
													   <option value="El Salvador">El Salvador</option>
													   <option value="Equatorial Guinea">Equatorial Guinea</option>
													   <option value="Eritrea">Eritrea</option>
													   <option value="Estonia">Estonia</option>
													   <option value="Ethiopia">Ethiopia</option>
													   <option value="Falkland Islands">Falkland Islands</option>
													   <option value="Faroe Islands">Faroe Islands</option>
													   <option value="Fiji">Fiji</option>
													   <option value="Finland">Finland</option>
													   <option value="France">France</option>
													   <option value="French Guiana">French Guiana</option>
													   <option value="French Polynesia">French Polynesia</option>
													   <option value="French Southern Ter">French Southern Ter</option>
													   <option value="Gabon">Gabon</option>
													   <option value="Gambia">Gambia</option>
													   <option value="Georgia">Georgia</option>
													   <option value="Germany">Germany</option>
													   <option value="Ghana">Ghana</option>
													   <option value="Gibraltar">Gibraltar</option>
													   <option value="Great Britain">Great Britain</option>
													   <option value="Greece">Greece</option>
													   <option value="Greenland">Greenland</option>
													   <option value="Grenada">Grenada</option>
													   <option value="Guadeloupe">Guadeloupe</option>
													   <option value="Guam">Guam</option>
													   <option value="Guatemala">Guatemala</option>
													   <option value="Guinea">Guinea</option>
													   <option value="Guyana">Guyana</option>
													   <option value="Haiti">Haiti</option>
													   <option value="Hawaii">Hawaii</option>
													   <option value="Honduras">Honduras</option>
													   <option value="Hong Kong">Hong Kong</option>
													   <option value="Hungary">Hungary</option>
													   <option value="Iceland">Iceland</option>
													   <option value="Indonesia">Indonesia</option>
													   <option value="India">India</option>
													   <option value="Iran">Iran</option>
													   <option value="Iraq">Iraq</option>
													   <option value="Ireland">Ireland</option>
													   <option value="Isle of Man">Isle of Man</option>
													   <option value="Israel">Israel</option>
													   <option value="Italy">Italy</option>
													   <option value="Jamaica">Jamaica</option>
													   <option value="Japan">Japan</option>
													   <option value="Jordan">Jordan</option>
													   <option value="Kazakhstan">Kazakhstan</option>
													   <option value="Kenya">Kenya</option>
													   <option value="Kiribati">Kiribati</option>
													   <option value="Korea North">Korea North</option>
													   <option value="Korea Sout">Korea South</option>
													   <option value="Kuwait">Kuwait</option>
													   <option value="Kyrgyzstan">Kyrgyzstan</option>
													   <option value="Laos">Laos</option>
													   <option value="Latvia">Latvia</option>
													   <option value="Lebanon">Lebanon</option>
													   <option value="Lesotho">Lesotho</option>
													   <option value="Liberia">Liberia</option>
													   <option value="Libya">Libya</option>
													   <option value="Liechtenstein">Liechtenstein</option>
													   <option value="Lithuania">Lithuania</option>
													   <option value="Luxembourg">Luxembourg</option>
													   <option value="Macau">Macau</option>
													   <option value="Macedonia">Macedonia</option>
													   <option value="Madagascar">Madagascar</option>
													   <option value="Malaysia">Malaysia</option>
													   <option value="Malawi">Malawi</option>
													   <option value="Maldives">Maldives</option>
													   <option value="Mali">Mali</option>
													   <option value="Malta">Malta</option>
													   <option value="Marshall Islands">Marshall Islands</option>
													   <option value="Martinique">Martinique</option>
													   <option value="Mauritania">Mauritania</option>
													   <option value="Mauritius">Mauritius</option>
													   <option value="Mayotte">Mayotte</option>
													   <option value="Mexico">Mexico</option>
													   <option value="Midway Islands">Midway Islands</option>
													   <option value="Moldova">Moldova</option>
													   <option value="Monaco">Monaco</option>
													   <option value="Mongolia">Mongolia</option>
													   <option value="Montserrat">Montserrat</option>
													   <option value="Morocco">Morocco</option>
													   <option value="Mozambique">Mozambique</option>
													   <option value="Myanmar">Myanmar</option>
													   <option value="Nambia">Nambia</option>
													   <option value="Nauru">Nauru</option>
													   <option value="Nepal">Nepal</option>
													   <option value="Netherland Antilles">Netherland Antilles</option>
													   <option value="Netherlands">Netherlands (Holland, Europe)</option>
													   <option value="Nevis">Nevis</option>
													   <option value="New Caledonia">New Caledonia</option>
													   <option value="New Zealand">New Zealand</option>
													   <option value="Nicaragua">Nicaragua</option>
													   <option value="Niger">Niger</option>
													   <option value="Nigeria">Nigeria</option>
													   <option value="Niue">Niue</option>
													   <option value="Norfolk Island">Norfolk Island</option>
													   <option value="Norway">Norway</option>
													   <option value="Oman">Oman</option>
													   <option value="Pakistan">Pakistan</option>
													   <option value="Palau Island">Palau Island</option>
													   <option value="Palestine">Palestine</option>
													   <option value="Panama">Panama</option>
													   <option value="Papua New Guinea">Papua New Guinea</option>
													   <option value="Paraguay">Paraguay</option>
													   <option value="Peru">Peru</option>
													   <option value="Phillipines">Philippines</option>
													   <option value="Pitcairn Island">Pitcairn Island</option>
													   <option value="Poland">Poland</option>
													   <option value="Portugal">Portugal</option>
													   <option value="Puerto Rico">Puerto Rico</option>
													   <option value="Qatar">Qatar</option>
													   <option value="Republic of Montenegro">Republic of Montenegro</option>
													   <option value="Republic of Serbia">Republic of Serbia</option>
													   <option value="Reunion">Reunion</option>
													   <option value="Romania">Romania</option>
													   <option value="Russia">Russia</option>
													   <option value="Rwanda">Rwanda</option>
													   <option value="St Barthelemy">St Barthelemy</option>
													   <option value="St Eustatius">St Eustatius</option>
													   <option value="St Helena">St Helena</option>
													   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
													   <option value="St Lucia">St Lucia</option>
													   <option value="St Maarten">St Maarten</option>
													   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
													   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
													   <option value="Saipan">Saipan</option>
													   <option value="Samoa">Samoa</option>
													   <option value="Samoa American">Samoa American</option>
													   <option value="San Marino">San Marino</option>
													   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
													   <option value="Saudi Arabia">Saudi Arabia</option>
													   <option value="Senegal">Senegal</option>
													   <option value="Seychelles">Seychelles</option>
													   <option value="Sierra Leone">Sierra Leone</option>
													   <option value="Singapore">Singapore</option>
													   <option value="Slovakia">Slovakia</option>
													   <option value="Slovenia">Slovenia</option>
													   <option value="Solomon Islands">Solomon Islands</option>
													   <option value="Somalia">Somalia</option>
													   <option value="South Africa">South Africa</option>
													   <option value="Spain">Spain</option>
													   <option value="Sri Lanka">Sri Lanka</option>
													   <option value="Sudan">Sudan</option>
													   <option value="Suriname">Suriname</option>
													   <option value="Swaziland">Swaziland</option>
													   <option value="Sweden">Sweden</option>
													   <option value="Switzerland">Switzerland</option>
													   <option value="Syria">Syria</option>
													   <option value="Tahiti">Tahiti</option>
													   <option value="Taiwan">Taiwan</option>
													   <option value="Tajikistan">Tajikistan</option>
													   <option value="Tanzania">Tanzania</option>
													   <option value="Thailand">Thailand</option>
													   <option value="Togo">Togo</option>
													   <option value="Tokelau">Tokelau</option>
													   <option value="Tonga">Tonga</option>
													   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
													   <option value="Tunisia">Tunisia</option>
													   <option value="Turkey">Turkey</option>
													   <option value="Turkmenistan">Turkmenistan</option>
													   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
													   <option value="Tuvalu">Tuvalu</option>
													   <option value="Uganda">Uganda</option>
													   <option value="United Kingdom">United Kingdom</option>
													   <option value="Ukraine">Ukraine</option>
													   <option value="United Arab Erimates">United Arab Emirates</option>
													   <option value="United States of America">United States of America</option>
													   <option value="Uraguay">Uruguay</option>
													   <option value="Uzbekistan">Uzbekistan</option>
													   <option value="Vanuatu">Vanuatu</option>
													   <option value="Vatican City State">Vatican City State</option>
													   <option value="Venezuela">Venezuela</option>
													   <option value="Vietnam">Vietnam</option>
													   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
													   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
													   <option value="Wake Island">Wake Island</option>
													   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
													   <option value="Yemen">Yemen</option>
													   <option value="Zaire">Zaire</option>
													   <option value="Zambia">Zambia</option>
													   <option value="Zimbabwe">Zimbabwe</option>
													</select> 										
												</div>	
											</div>	
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="firstname" placeholder="First Name *" required>
												</p>
											</div>	
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="lastname" placeholder="Last Name *" required>
												</p>
											</div>	
											<div class="col-md-12">
												<p class="form-row">
													<input type="text"  name="companyname" placeholder="Company Name">
												</p>
											</div>	
											<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="streetaddress" placeholder="Street address*" required>
												</p>
												
											</div>
											<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="towncity" placeholder="Town / City*" required>
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="state" placeholder="State / County *">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="postcode" placeholder="Postcode / Zip">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="email" name="emailaddress" placeholder="Email Address *" required>
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="tel" name="phonenumber" placeholder="Phone *" required>
													<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
												</p>
											</div>
												<div class="col-md-6">
														<p>
														<input class="btn btn-default" type="submit" name="billinginfo" id="billinginfo" value="SUBMIT"/>
												</p>
												</div>	
												
											</form>

											<?php
											if(isset($_GET['billinginfo'])){
												$country = $_GET['country'];
												$firstname = $_GET['firstname'];
												$lastname = $_GET['lastname'];
												$companyname = $_GET['companyname'];
												$streetaddress = $_GET['streetaddress'];
												$towncity = $_GET['towncity'];
												$state = $_GET['state'];
												$postcode = $_GET['postcode'];
												$emailaddress = $_GET['emailaddress'];
												$phonenumber = $_GET['phonenumber'];
												require_once('connect.php');
												$newfetch ="SELECT * FROM `deliveryinformation` WHERE Email = '".$emailaddress."'";
												$result=mysqli_query($link,$newfetch);
												$row2=mysqli_fetch_row($result);	
												if(mysqli_num_rows($result)==0){
												$query = "INSERT INTO `deliveryinformation` (Country,LastName,FirstName,CompanyName,StreetAddress,Town,State,PostCode,Email,PhoneNumber) VALUES('$country','$lastname','$firstname','$companyname','$streetaddress','$towncity','$state','$postcode','$emailaddress','$phonenumber')";
												$results=mysqli_query($link,$query);
												if($results){
												echo '<script type="application/javascript">';
												echo'alert("Your Billing Information has been Registered, you can proceed to Create an Account under Same Section");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												}else{
												echo '<script type="application/javascript">';
												echo'alert("Billing Details with same email address exists");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												
											}
											?>											

											<div class="col-md-12">
												<label class="checbox-info">
													<input type="checkbox" id="cbox" checked>
													Create an account?
												</label>
												<div id="cbox_info">
													<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
												<form method="GET" action="checkout.php">
												<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="fullnames" placeholder="Full Names*" required>
												</p>
												</div>
												<div class="col-md-12">
												<p class="form-row">
													<input type="email" name="Email" placeholder="Email*" required>
												</p>
												<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?> ">
												</div>
												<div class="col-md-12">
												<p class="form-row">
													<input type="password" name="Password" placeholder="password*" required>
												</p>
												</div>												
												<div class="col-md-12">
													<p class="form-row">
														<input type="text" name="telephone" placeholder="Telephone Number*" required>
													</p>
												</div>
												<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="address" placeholder="Address*" required>
												</p>
												</div>
												<div class="col-md-6">
														<p>
														<input class="btn btn-default" type="submit" name="register" id="register" value="REGISTER ACCOUNT"/>
												</p>
												</div>
												</form>	
<?php
											if(isset($_GET['register'])){
												$fullnames= $_GET['fullnames'];
												$Email = $_GET['Email'];
												$Password = $_GET['Password'];
												$encryptedpassword = md5($Password);
												$telephone = $_GET['telephone'];
												$address = $_GET['address'];
												require_once('connect.php');
												$newfetch ="SELECT * FROM `clientregistration` WHERE Email = '".$Email."'";
												$result=mysqli_query($link,$newfetch);
												$row2=mysqli_fetch_row($result);	
												if(mysqli_num_rows($result)==0){
												$query = "INSERT INTO `clientregistration` (FullNames,Email,Password,Telephone,Address) VALUES('$fullnames','$Email','$encryptedpassword','$telephone','$address')";
												$results=mysqli_query($link,$query);
												if($results){
													require 'PHPMailer/src/Exception.php';
													require 'PHPMailer/src/PHPMailer.php';
													require 'PHPMailer/src/SMTP.php';			
															
															
												$to = $Email;
												$subject = 'Confirm Account';
												$message = 'Click this link to confirm your account with Igaaza Creations http://igaaza.com/emailapproval?email='.$to;
												$headers = "MIME-Version: 1.0" . "\r\n";
												$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
												$headers = 'From:  info@igaaza.com ' . "\r\n" .'Reply-To: no-reply@igaaza.com ' . "\r\n" .'X-Mailer: PHP/' . phpversion();

												echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
												
												echo '<script type="application/javascript">';
												echo'alert("Your Account Has Been created, Please visit your email Address to confirm it, Approve to begin Using it");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}else{
													echo '<script type="application/javascript">';
												echo'alert("Account Registration Failed, Try Again");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												}else{
												echo '<script type="application/javascript">';
												echo'alert("Account with same email address exists");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												
											}
											?>											
												
												</div>
											</div>											
										</div>
									</div>
								</div>
                            </div>
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										   <span>3</span>
										   Delivery Method
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<div class="different-address">
											<div class="ship-different-title">
												<h3>
													<label>Ship to a different address from one in Billing?</label>
													<input type="checkbox" id="ship-box">
												</h3>
											</div>
											<div id="ship-box-info" class="row">
												<div class="col-md-12">
													<form method="GET" action="checkout.php">
												<div class="shop-select">
													<label>Country <span class="required">*</span></label>
													<select name="country" required>
														<option value="Afganistan">Afghanistan</option>
													   <option value="Albania">Albania</option>
													   <option value="Algeria">Algeria</option>
													   <option value="American Samoa">American Samoa</option>
													   <option value="Andorra">Andorra</option>
													   <option value="Angola">Angola</option>
													   <option value="Anguilla">Anguilla</option>
													   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
													   <option value="Argentina">Argentina</option>
													   <option value="Armenia">Armenia</option>
													   <option value="Aruba">Aruba</option>
													   <option value="Australia">Australia</option>
													   <option value="Austria">Austria</option>
													   <option value="Azerbaijan">Azerbaijan</option>
													   <option value="Bahamas">Bahamas</option>
													   <option value="Bahrain">Bahrain</option>
													   <option value="Bangladesh">Bangladesh</option>
													   <option value="Barbados">Barbados</option>
													   <option value="Belarus">Belarus</option>
													   <option value="Belgium">Belgium</option>
													   <option value="Belize">Belize</option>
													   <option value="Benin">Benin</option>
													   <option value="Bermuda">Bermuda</option>
													   <option value="Bhutan">Bhutan</option>
													   <option value="Bolivia">Bolivia</option>
													   <option value="Bonaire">Bonaire</option>
													   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
													   <option value="Botswana">Botswana</option>
													   <option value="Brazil">Brazil</option>
													   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
													   <option value="Brunei">Brunei</option>
													   <option value="Bulgaria">Bulgaria</option>
													   <option value="Burkina Faso">Burkina Faso</option>
													   <option value="Burundi">Burundi</option>
													   <option value="Cambodia">Cambodia</option>
													   <option value="Cameroon">Cameroon</option>
													   <option value="Canada">Canada</option>
													   <option value="Canary Islands">Canary Islands</option>
													   <option value="Cape Verde">Cape Verde</option>
													   <option value="Cayman Islands">Cayman Islands</option>
													   <option value="Central African Republic">Central African Republic</option>
													   <option value="Chad">Chad</option>
													   <option value="Channel Islands">Channel Islands</option>
													   <option value="Chile">Chile</option>
													   <option value="China">China</option>
													   <option value="Christmas Island">Christmas Island</option>
													   <option value="Cocos Island">Cocos Island</option>
													   <option value="Colombia">Colombia</option>
													   <option value="Comoros">Comoros</option>
													   <option value="Congo">Congo</option>
													   <option value="Cook Islands">Cook Islands</option>
													   <option value="Costa Rica">Costa Rica</option>
													   <option value="Cote DIvoire">Cote DIvoire</option>
													   <option value="Croatia">Croatia</option>
													   <option value="Cuba">Cuba</option>
													   <option value="Curaco">Curacao</option>
													   <option value="Cyprus">Cyprus</option>
													   <option value="Czech Republic">Czech Republic</option>
													   <option value="Denmark">Denmark</option>
													   <option value="Djibouti">Djibouti</option>
													   <option value="Dominica">Dominica</option>
													   <option value="Dominican Republic">Dominican Republic</option>
													   <option value="East Timor">East Timor</option>
													   <option value="Ecuador">Ecuador</option>
													   <option value="Egypt">Egypt</option>
													   <option value="El Salvador">El Salvador</option>
													   <option value="Equatorial Guinea">Equatorial Guinea</option>
													   <option value="Eritrea">Eritrea</option>
													   <option value="Estonia">Estonia</option>
													   <option value="Ethiopia">Ethiopia</option>
													   <option value="Falkland Islands">Falkland Islands</option>
													   <option value="Faroe Islands">Faroe Islands</option>
													   <option value="Fiji">Fiji</option>
													   <option value="Finland">Finland</option>
													   <option value="France">France</option>
													   <option value="French Guiana">French Guiana</option>
													   <option value="French Polynesia">French Polynesia</option>
													   <option value="French Southern Ter">French Southern Ter</option>
													   <option value="Gabon">Gabon</option>
													   <option value="Gambia">Gambia</option>
													   <option value="Georgia">Georgia</option>
													   <option value="Germany">Germany</option>
													   <option value="Ghana">Ghana</option>
													   <option value="Gibraltar">Gibraltar</option>
													   <option value="Great Britain">Great Britain</option>
													   <option value="Greece">Greece</option>
													   <option value="Greenland">Greenland</option>
													   <option value="Grenada">Grenada</option>
													   <option value="Guadeloupe">Guadeloupe</option>
													   <option value="Guam">Guam</option>
													   <option value="Guatemala">Guatemala</option>
													   <option value="Guinea">Guinea</option>
													   <option value="Guyana">Guyana</option>
													   <option value="Haiti">Haiti</option>
													   <option value="Hawaii">Hawaii</option>
													   <option value="Honduras">Honduras</option>
													   <option value="Hong Kong">Hong Kong</option>
													   <option value="Hungary">Hungary</option>
													   <option value="Iceland">Iceland</option>
													   <option value="Indonesia">Indonesia</option>
													   <option value="India">India</option>
													   <option value="Iran">Iran</option>
													   <option value="Iraq">Iraq</option>
													   <option value="Ireland">Ireland</option>
													   <option value="Isle of Man">Isle of Man</option>
													   <option value="Israel">Israel</option>
													   <option value="Italy">Italy</option>
													   <option value="Jamaica">Jamaica</option>
													   <option value="Japan">Japan</option>
													   <option value="Jordan">Jordan</option>
													   <option value="Kazakhstan">Kazakhstan</option>
													   <option value="Kenya">Kenya</option>
													   <option value="Kiribati">Kiribati</option>
													   <option value="Korea North">Korea North</option>
													   <option value="Korea Sout">Korea South</option>
													   <option value="Kuwait">Kuwait</option>
													   <option value="Kyrgyzstan">Kyrgyzstan</option>
													   <option value="Laos">Laos</option>
													   <option value="Latvia">Latvia</option>
													   <option value="Lebanon">Lebanon</option>
													   <option value="Lesotho">Lesotho</option>
													   <option value="Liberia">Liberia</option>
													   <option value="Libya">Libya</option>
													   <option value="Liechtenstein">Liechtenstein</option>
													   <option value="Lithuania">Lithuania</option>
													   <option value="Luxembourg">Luxembourg</option>
													   <option value="Macau">Macau</option>
													   <option value="Macedonia">Macedonia</option>
													   <option value="Madagascar">Madagascar</option>
													   <option value="Malaysia">Malaysia</option>
													   <option value="Malawi">Malawi</option>
													   <option value="Maldives">Maldives</option>
													   <option value="Mali">Mali</option>
													   <option value="Malta">Malta</option>
													   <option value="Marshall Islands">Marshall Islands</option>
													   <option value="Martinique">Martinique</option>
													   <option value="Mauritania">Mauritania</option>
													   <option value="Mauritius">Mauritius</option>
													   <option value="Mayotte">Mayotte</option>
													   <option value="Mexico">Mexico</option>
													   <option value="Midway Islands">Midway Islands</option>
													   <option value="Moldova">Moldova</option>
													   <option value="Monaco">Monaco</option>
													   <option value="Mongolia">Mongolia</option>
													   <option value="Montserrat">Montserrat</option>
													   <option value="Morocco">Morocco</option>
													   <option value="Mozambique">Mozambique</option>
													   <option value="Myanmar">Myanmar</option>
													   <option value="Nambia">Nambia</option>
													   <option value="Nauru">Nauru</option>
													   <option value="Nepal">Nepal</option>
													   <option value="Netherland Antilles">Netherland Antilles</option>
													   <option value="Netherlands">Netherlands (Holland, Europe)</option>
													   <option value="Nevis">Nevis</option>
													   <option value="New Caledonia">New Caledonia</option>
													   <option value="New Zealand">New Zealand</option>
													   <option value="Nicaragua">Nicaragua</option>
													   <option value="Niger">Niger</option>
													   <option value="Nigeria">Nigeria</option>
													   <option value="Niue">Niue</option>
													   <option value="Norfolk Island">Norfolk Island</option>
													   <option value="Norway">Norway</option>
													   <option value="Oman">Oman</option>
													   <option value="Pakistan">Pakistan</option>
													   <option value="Palau Island">Palau Island</option>
													   <option value="Palestine">Palestine</option>
													   <option value="Panama">Panama</option>
													   <option value="Papua New Guinea">Papua New Guinea</option>
													   <option value="Paraguay">Paraguay</option>
													   <option value="Peru">Peru</option>
													   <option value="Phillipines">Philippines</option>
													   <option value="Pitcairn Island">Pitcairn Island</option>
													   <option value="Poland">Poland</option>
													   <option value="Portugal">Portugal</option>
													   <option value="Puerto Rico">Puerto Rico</option>
													   <option value="Qatar">Qatar</option>
													   <option value="Republic of Montenegro">Republic of Montenegro</option>
													   <option value="Republic of Serbia">Republic of Serbia</option>
													   <option value="Reunion">Reunion</option>
													   <option value="Romania">Romania</option>
													   <option value="Russia">Russia</option>
													   <option value="Rwanda">Rwanda</option>
													   <option value="St Barthelemy">St Barthelemy</option>
													   <option value="St Eustatius">St Eustatius</option>
													   <option value="St Helena">St Helena</option>
													   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
													   <option value="St Lucia">St Lucia</option>
													   <option value="St Maarten">St Maarten</option>
													   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
													   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
													   <option value="Saipan">Saipan</option>
													   <option value="Samoa">Samoa</option>
													   <option value="Samoa American">Samoa American</option>
													   <option value="San Marino">San Marino</option>
													   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
													   <option value="Saudi Arabia">Saudi Arabia</option>
													   <option value="Senegal">Senegal</option>
													   <option value="Seychelles">Seychelles</option>
													   <option value="Sierra Leone">Sierra Leone</option>
													   <option value="Singapore">Singapore</option>
													   <option value="Slovakia">Slovakia</option>
													   <option value="Slovenia">Slovenia</option>
													   <option value="Solomon Islands">Solomon Islands</option>
													   <option value="Somalia">Somalia</option>
													   <option value="South Africa">South Africa</option>
													   <option value="Spain">Spain</option>
													   <option value="Sri Lanka">Sri Lanka</option>
													   <option value="Sudan">Sudan</option>
													   <option value="Suriname">Suriname</option>
													   <option value="Swaziland">Swaziland</option>
													   <option value="Sweden">Sweden</option>
													   <option value="Switzerland">Switzerland</option>
													   <option value="Syria">Syria</option>
													   <option value="Tahiti">Tahiti</option>
													   <option value="Taiwan">Taiwan</option>
													   <option value="Tajikistan">Tajikistan</option>
													   <option value="Tanzania">Tanzania</option>
													   <option value="Thailand">Thailand</option>
													   <option value="Togo">Togo</option>
													   <option value="Tokelau">Tokelau</option>
													   <option value="Tonga">Tonga</option>
													   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
													   <option value="Tunisia">Tunisia</option>
													   <option value="Turkey">Turkey</option>
													   <option value="Turkmenistan">Turkmenistan</option>
													   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
													   <option value="Tuvalu">Tuvalu</option>
													   <option value="Uganda">Uganda</option>
													   <option value="United Kingdom">United Kingdom</option>
													   <option value="Ukraine">Ukraine</option>
													   <option value="United Arab Erimates">United Arab Emirates</option>
													   <option value="United States of America">United States of America</option>
													   <option value="Uraguay">Uruguay</option>
													   <option value="Uzbekistan">Uzbekistan</option>
													   <option value="Vanuatu">Vanuatu</option>
													   <option value="Vatican City State">Vatican City State</option>
													   <option value="Venezuela">Venezuela</option>
													   <option value="Vietnam">Vietnam</option>
													   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
													   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
													   <option value="Wake Island">Wake Island</option>
													   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
													   <option value="Yemen">Yemen</option>
													   <option value="Zaire">Zaire</option>
													   <option value="Zambia">Zambia</option>
													   <option value="Zimbabwe">Zimbabwe</option>
													</select> 										
												</div>	
											</div>	
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="firstname" placeholder="First Name *" required>
												</p>
											</div>	
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="lastname" placeholder="Last Name *" required>
												</p>
											</div>	
											<div class="col-md-12">
												<p class="form-row">
													<input type="text"  name="companyname" placeholder="Company Name">
												</p>
											</div>	
											<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="streetaddress" placeholder="Street address" required>
												</p>
											</div>
											<div class="col-md-12">
												<p class="form-row">
													<input type="text" name="towncity" placeholder="Town / City" required>
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="state" placeholder="State / County *" required>
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" name="postcode" placeholder="Postcode / Zip">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="email" name="emailaddress" placeholder="Email Address *" required>
												</p>
												<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="tel" name="phonenumber" placeholder="Phone *" required>
												</p>
											</div>
												<div class="col-md-6">
														<p>
														<input class="btn btn-default" type="submit" name="billinginfoupdate" id="billinginfoupdate" value="SUBMIT"/>
												</p>
												</div>	
											</form>		
											<?php
											if(isset($_GET['billinginfoupdate'])){
												$country = $_GET['country'];
												$firstname = $_GET['firstname'];
												$lastname = $_GET['lastname'];
												$companyname = $_GET['companyname'];
												$streetaddress = $_GET['streetaddress'];
												$towncity = $_GET['towncity'];
												$state = $_GET['state'];
												$postcode = $_GET['postcode'];
												$emailaddress = $_GET['emailaddress'];
												$phonenumber = $_GET['phonenumber'];
												require_once('connect.php');
												$newfetch ="SELECT * FROM `deliveryinformation` WHERE Email = '".$emailaddress."'";
												$result=mysqli_query($link,$newfetch);
												$row2=mysqli_fetch_row($result);	
												if(mysqli_num_rows($result)==1){
												$query = "INSERT INTO `deliveryinformation` (Country,LastName,FirstName,CompanyName,StreetAddress,Town,State,PostCode,Email,PhoneNumber) VALUES('$country','$lastname','$firstname','$companyname','$streetaddress','$towncity','$state','$postcode','$emailaddress','$phonenumber')";
												$results=mysqli_query($link,$query);
												if($results){
												echo '<script type="application/javascript">';
												echo'alert("Your Delivery Information has been Registered");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												}else{
												$query = "UPDATE `deliveryinformation` SET Country='$country',LastName='$lastname',FirstName='$firstname',CompanyName='$companyname',StreetAddress='$streetaddress',Town='$towncity',State='$state',PostCode='$postcode',PhoneNumber='$phonenumber' where Email='$emailaddress'";
												$results=mysqli_query($link,$query);
												if($results){
												echo '<script type="application/javascript">';
												echo'alert("Your Delivery Information has been Registered");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												
											}
											}
											?>										
											</div>
											<form method="GET" action="checkout.php">
											<div class="order-notes">
												<label>Order Notes</label>
												<p>
												<textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" name="checkoutmess" id="checkoutmess" required></textarea>
											</p>
											</div>
											<div class="col-md-6">
												<p>
												<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
												<input class="btn btn-default" type="submit" name="billinginfonotes" id="billinginfonotes" value="SUBMIT NOTES"/>
												</p>
											</div>	
											</form>
											<?php
											if(isset($_GET['billinginfonotes'])){
												$checkoutmess= $_GET['checkoutmess'];
												$Email = $_SESSION['igaazaemail'];
												$ordercodes=$_GET['ordercode'];
												require_once('connect.php');
												$newfetch ="SELECT IDs FROM `bookings` WHERE User = '".$Email."' and OrderCode='".$ordercodes."' order By IDs DESC LIMIT 1";
												$result=mysqli_query($link,$newfetch);
												$row2=mysqli_fetch_row($result);										
												$fetchdids=	$row2[0];	
												if(mysqli_num_rows($result)>=1){
												$query = "UPDATE `bookings` SET OrderNotes='$checkoutmess' where IDs='$fetchdids'";
												$results=mysqli_query($link,$query);
												if($results){												
												echo '<script type="application/javascript">';
												echo'alert("Your Notes Have been successfuly added to the Order");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}else{
													echo '<script type="application/javascript">';
												echo'alert("Failed, Try Again");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												}else{
												$query = "INSERT INTO `bookings` (OrderCode,User,OrderNotes) VALUES('$ordercodes','$Email','$checkoutmess')";
												$results=mysqli_query($link,$query);
												if($results){												
												echo '<script type="application/javascript">';
												echo'alert("Your Notes Have been successfuly added to the Order");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}else{
													echo '<script type="application/javascript">';
												echo'alert("Failed, Try Again");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}
												}
												
											}
											?>										
										</div>								
									</div>
								</div>
                            </div>
														<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										   <span>4</span>
										   Order Review
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body no-padding">
										<div class="order-review" id="checkout-review">    
											<div class="table-responsive" id="checkout-review-table-wrapper">
												<table class="data-table" id="checkout-review-table">
													<thead>
														<tr>
															<th rowspan="1">Product Name</th>
															<th colspan="1">Price</th>
															<th rowspan="1">Qty</th>
															<th colspan="1">Subtotal</th>
														</tr>
													</thead>
													<tbody>
													<?php
								
													if(isset($_SESSION['igaazauser'])){
														$ordercodes="";
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															$ordercodes= $row5['OrderCode'];
														}
													require_once('connect.php');
													$sales7 ="SELECT ProductName,Quantity,OrderCost,IDDesc FROM `orders`  where OrderByEmail='".$_SESSION['igaazaemail']."' and OrderCode='".$ordercodes."' and ReviewOrder ='Not Confirmed' order by IDDesc ASC ";
													$result8=mysqli_query($link,$sales7);
													while($row8=mysqli_fetch_assoc($result8)){
														echo"<tr>";
															echo"<td><h3 class='product-name'>".$row8['ProductName']."</h3></td>";
															echo"<td><span class='cart-price'><span class='check-price'>Shs.".($row8['OrderCost']/$row8['Quantity'])."</span></span></td>";
															echo"<td>".$row8['Quantity']."</td>";
															//<!-- sub total starts here -->
															echo"<td><span class='cart-price'><span class='check-price'>Shs.".($row8['OrderCost'])."</span></span></td>";
														echo"</tr>";
													}
													}
													?>													
													</tbody>
													<tfoot>
														<tr>
															<td colspan="3">Subtotal</td>
															<td><span class="check-price">
														<?php
														
														if(isset($_SESSION['igaazauser'])){
															$ordercodes="";
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															 $ordercodes=$row5['OrderCode'];
														}
														require_once('connect.php');					
														$sales11 ="SELECT SUM(OrderCost) as Carttotal from orders where OrderByEmail='".$_SESSION['igaazaemail']."' and OrderCode='".$ordercodes."'";
														$results=mysqli_query($link,$sales11);
														if($results)
														{
															if($row9=mysqli_fetch_assoc($results)){
															Echo "Shs. ".$row9['Carttotal'];
															}
															else{
															Echo  "Shs."." 0";
															}
														}
														else{
															Echo  "Shs."." 0";
																}
														}else{
															Echo  "Shs."." 0";
														}
														?></span></td>
														</tr>
														<tr>
															<td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
															<td><span class="check-price">Shs. 10,000</span></td>
														</tr>
														<tr>
															<td colspan="3"><strong>Grand Total</strong></td>
															<td><strong><span class="check-price">
															<?php
															if(isset($_SESSION['igaazauser'])){
																$ordercodes="";
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed'order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															 $ordercodes=$row5['OrderCode'];
														}
														require_once('connect.php');					
														$sales11 ="SELECT SUM(OrderCost) as Carttotal from orders where OrderByEmail='".$_SESSION['igaazaemail']."' and OrderCode='".$ordercodes."'";
														$results=mysqli_query($link,$sales11);
														if($results)
														{
															if($row9=mysqli_fetch_assoc($results)){
															Echo "Shs. ".($row9['Carttotal']+10000);
															}else{
															Echo "Shs."." 0";
																}
														}
														else{
															Echo  "Shs."." 0";
																}
														}else{
															Echo  "Shs."." 0";
														}
														?></span></strong></td>
														</tr>
													</tfoot>
												</table>
											</div>
											<div id="checkout-review-submit">
												<div class="cart-btn-3" id="review-buttons-container">
												<p class="left"> <a href="cart.php"></a></p>
													<form method="GET">
													<input type="hidden" name="ordercode" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
															<input type="hidden" name="totalcost" value="<?php if(isset($_SESSION['igaazauser'])){
																$ordercodes="";
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Not Confirmed'order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															 $ordercodes=$row5['OrderCode'];
														}
														require_once('connect.php');					
														$sales11 ="SELECT SUM(OrderCost) as Carttotal from orders where OrderByEmail='".$_SESSION['igaazaemail']."' and OrderCode='".$ordercodes."'";
														$results=mysqli_query($link,$sales11);
														if($results)
														{
															if($row9=mysqli_fetch_assoc($results)){
																$finaltotals=$row9['Carttotal']+10000;
															Echo $finaltotals;
															}else{
															Echo "0";
																}
														}
														else{
															Echo  "0";
																}
														}else{
															Echo  "0";
														}
														?>" />
													<button type="submit" name="confirmorder" title="Place Order" class="btn btn-default"><span>Confirm Order</span></button>
													</form>
													<?php
											if(isset($_GET['confirmorder'])){
												require_once('connect.php');
												$totalcost= $_GET['totalcost'];
												$Email = $_SESSION['igaazaemail'];
												$ordercodes=$_GET['ordercode'];
												require_once('connect.php');
												$newfetch ="SELECT IDs FROM `bookings` WHERE OrderCode='".$ordercodes."' order By IDs DESC";
												$result=mysqli_query($link,$newfetch);
												$row2=mysqli_fetch_row($result);										
												$fetchdids=	$row2[0];	
												if(mysqli_num_rows($result)>=1){
												$query = "UPDATE `bookings` SET TotalCost='$totalcost' where IDs='$fetchdids'";
												$results=mysqli_query($link,$query);
												}else{
												$query = "INSERT INTO `bookings` (OrderCode,User,TotalCost) VALUES('$ordercodes','$Email','$totalcost')";
												$results=mysqli_query($link,$query);
												}										
														
												require_once('connect.php');		
												$query = "UPDATE `orders` SET ReviewOrder='Confirmed' where OrderCode='".$ordercodes."'";
												$results=mysqli_query($link,$query);
												if($results){												
												echo '<script type="application/javascript">';
												echo'alert("Your Order Has been successfuly Confirmed, Proceed to Payment");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}else{
													echo '<script type="application/javascript">';
												echo'alert("Failed, Try Again");';
												echo'window.location.href="checkout.php"';
												echo '</script>';
												}												
											}
											?>								
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										   <span>5</span>
										   Payment Information
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body no-padding">
										<div class="payment-met">
											<form action="insertcheckout.php" id="payment-form" method="GET">
												<ul class="form-list">
													<!--<li class="control">
														<input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo">
														<label for="p_method_checkmo">Mobile Money</label>
													</li>
													<li class="control">
														<input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
														<label for="p_method_ccsave">Credit Card</label>
													</li>-->
													<input type="hidden" name="refid" value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Confirmed'  and PaymentStatus='Not Paid' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['OrderCode'];
														}
															?>">
															<input type="hidden" name="ammounts" value="<?php
															require_once('connect.php');														
														$sales6 ="SELECT OrderCode FROM `orders` where OrderByEmail='".$_SESSION['igaazaemail']."' and ReviewOrder ='Confirmed'  and PaymentStatus='Not Paid' order by IDDesc Asc ";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															$ordercodes= $row5['OrderCode'];
														require_once('connect.php');														
														$sales7 ="SELECT TotalCost FROM `bookings` where OrderCode='".$ordercodes."' ";
														$result8=mysqli_query($link,$sales7);
														if(mysqli_num_rows($result8) >=1){
														$row8=mysqli_fetch_assoc($result8);
															echo $row8['TotalCost'];
														}
														}
															?>">
															<input type="hidden" name="productid"  value="<?php
														require_once('connect.php');														
														$sales6 ="SELECT IDs FROM `bookings` where OrderCode='".$ordercodes."'";
														$result5=mysqli_query($link,$sales6);
														if(mysqli_num_rows($result5) >=1){
														$row5=mysqli_fetch_assoc($result5);
															echo $row5['IDs'];
														}
															?>">
													<li class="control">
														<input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
														<label for="p_method_ccsave">Cash on Delivery</label>
													</li>
												</ul>
											
											<div class="buttons-set">
												<button name="continuetopayments" class="btn btn-default">CONTINUE</button>
											</div>
											</form>
											
											</form>
										</div>
									</div>
								</div>
							</div>

                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="checkout-widget">
                            <h2 class="widget-title">YOUR CHECKOUT PROGRESS</h2>
                            <ul>
								<li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-minus"></i> Billing Address</a></li>
								<li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-minus"></i> Delivery Address</a></li>
								<li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-minus"></i> Delivery Method</a></li>
								<li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-minus"></i> Order Review</a></li>
								<li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-minus"></i> Payment Method</a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Check Out Area End -->
		<!-- Our Team Area Start -->
		<div class="our-team-area">
		    <h2 class="section-title">OUR TEAM</h2>
		    <div class="container">
		        <div class="row">
		       <div class="team-list indicator-style">
		            <div class="col-md-3" id="margretdiv">
		                <div class="single-team-member" id="margretdiv">
		                    <a href="#">
		                        <img src="img/about/team/1.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#" style="font-family: 'Sniglet', cursive;color: #9bba1f;">Margaret Kemigisa</a>
		                        <p>Founder & Head</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3" id="immaculatediv">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/2.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#" style="font-family: 'Sniglet', cursive;color: #5bc0de;">Kanyunyuzi Immaculate</a>
		                        <p>Board Member</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3" id="jeromediv">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/3.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#" style="font-family: 'Sniglet', cursive;color: #FF3333;">Jerome Oyome</a>
		                        <p>Illustrator</p>
		                    </div>
		                </div>
		            </div>
					<div class="col-md-3" id="gloriadiv">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/4.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#" style="font-family: 'Sniglet', cursive;color: #FFA500;" >Gloria Kunihira</a>
		                        <p>Coordinator, Reading Clubs</p>
		                    </div>
		                </div>
		            </div>
					
		               <div class="col-md-3" id="albertdiv">
					<div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/5.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#" style="font-family: 'Sniglet', cursive;color: #FFA500;" >Albert Jimmy Musinguzi</a>
		                        <p>Animator</p>
		                    </div>
		                </div>
						</div>
		            </div>
		        </div>
		        </div>
		    </div>
		</div>
		<!-- Our Team Area End -->
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
		<div id="myModal" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
 <span class="close">&times;</span>
<p><b>M</b>argaret <b>K</b>emigisa, the founder of Igaaza Creations (ICS) is a freelance social development consultant, working with different sectors in areas of with social research, institutional capacity strengthening and monitoring and evaluation. She holds a PhD in Public health and Policy from the University of London. She has over fifteen years’ experience that includes international work. Margaret work experience is the drive the led her to establish ICS as a social enterprise focused on a crosscutting development issue of literacy, with more emphasis on early literacy. Her witting addresses diverse topics ranging from environment, health promotion, adventure, economic empowerment, inclusiveness. Her maiden children’s books have been certified by the National Curriculum Centre in Uganda, as readers for primary schools. Some of her books provide useful complementary tools to taught themes and concepts. Presented both in form of books and music lyrics she has partnered with composers to produce songs for children. Her pursuit of Literacy and Early literacy is out of a conviction to overcome inequalities that come with illiteracy.  She spends more time trying to build ICS as a social enterprise in the field of early literacy and literacy broadly.  </p>
</div>
</div>
<div id="myModal1" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
 <span class="close">&times;</span>
<p><b>I</b>mmaculate <b>K</b>anyunyuzi has six years of work experience, working with four years professional experience with civil society organisations and 2 years of volunteerism. She has experience in research, field work, policy analysis, community mobilization and engagement with stakeholders. Specific areas of expertise include working with the children, Adolescents, women, Education programs, mobilization, counseling and psychosocial support. Immaculate is a graduate of Makerere University who holds a Bachelor’s degree in Social Sciences with specialization in social Administration. Currently, working for Strong Minds Uganda, a Mental Health organisation Immaculate plays a big role in insights to some of our health literacy activities. She also serves a Board member to ICS.</p>
</div>
</div>
<div id="myModal2" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
 <span class="close">&times;</span>
<p><b>J</b>erome <b>O</b>yome: Jerome is a professional teacher and an artist. He joined Igaaza Creations in 2018 and worked as an illustrator for three of our children’s books.</p>
</div>
</div>
<div id="myModal3" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
 <span class="close">&times;</span>
<p><b>G</b>loria <b>K</b>unihira: A graduate of Development Studies, Gloria joined Igaaza Creations, as the coordinator of reading clubs in Schools, with pioneering work in Kyankwanzi District. With the onset of COVId 19, this program is being redesigned to complement the household book lending one currently being implemented as a pilot in Kabarole district. Gloria continues to work in school programs supporting education interventions with other organisations.</p>
</div>
</div>
<div id="myModal4" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
 <span class="close">&times;</span>
<p><b>A</b>lbert <b>J</b>immy <b>M</b>usinguzi joined Igaaza as an on call artist. His initial work was illustrating our protagonist Wanda and her parents in our children’s series “Wanda and the Kingdom of Kuku.”  As ICS grows the idea of animating our stories was born we turned to Albert for inspiration.  Albert has been in the animation industry for three years. He has been involved in a couple of animation projects as a frame by frame animator, character designer, concept developer, background designer and voice acting, together with other roles in the animation chain. Albert is currently pursuing his 3rd year in the bachelors of environmental design at Uganda Martyrs University and is a part time animator at IGAZZA creations. Albert will lead the animation arm of all our stories.</p>
</div>
</div>
<script>
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
// Get the button that opens the modal
var btn = document.getElementById("margretdiv");
var btn1 = document.getElementById("immaculatediv");
var btn2 = document.getElementById("jeromediv");
var btn3 = document.getElementById("gloriadiv");
var btn4 = document.getElementById("albertdiv");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];
var span1 = document.getElementsByClassName("close")[2];
var span2 = document.getElementsByClassName("close")[3];
var span3 = document.getElementsByClassName("close")[4];
var span4 = document.getElementsByClassName("close")[5];
// When the user clicks on the button, open the modal
btn.onmouseover = function() {
  modal.style.display = "block";
}
btn1.onmouseover = function() {
  modal1.style.display = "block";
}
btn2.onmouseover = function() {
  modal2.style.display = "block";
}
btn3.onmouseover = function() {
  modal3.style.display = "block";
}
btn4.onmouseover = function() {
  modal4.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
span3.onclick = function() {
  modal3.style.display = "none";
}
span4.onclick = function() {
  modal4.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
} 
</script>

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