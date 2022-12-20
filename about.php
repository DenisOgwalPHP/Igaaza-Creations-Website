<?php session_start();

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
        <title>About Us || Igaaza Creations</title>
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
                                    <li class="active"><a href="about.php">ABOUT US</a></li>
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
                                    <li class="active"><a href="about.php">ABOUT US</a></li>
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
					       <h2 >About Us</h2> 
					       <ul class="breadcrumbs-list">
						        <li >
						            <a title="Return to Home" href="index.php">Igaaza Creations: Imagine it-Create it.</a>
						        </li>
						        <li >A Place to Nourish the Art of Imagination</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
		<!-- About Us Area Start -->
		<div class="about-us-area section-padding">
		    <div class="container">
                <div class="row">
                    <div class="about-top-inner">
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h2>About US</h2>
                                </div>
                                <div class="about-content">
									<p>Igaaza creations was formed and registered as with Uganda Registration Services Bureau in 2019. Principally formed as a social business enterprise Igaaza focuses on creating literary products to support early literacy initiatives in Uganda, reaching out to underprivileged schools that lack story books, and other educational support materials. </br>
                                    Igaaza Creations Ltd provides various publishing services. We seek to address a growing need to produce content relevant literary products addressing development issues. We pride developing our products based on research and learning. Our business model aims to create the now and future market for quality literacy products both in print and motion adaptations. </p>
                                    <p style="font-family: 'Sniglet', cursive;color: #9bba1f;">Our Vision </p>
									<p>An organization that produces quality story books that promote learning while also entertaining and inspiring readers</p>
									<p style="font-family: 'Sniglet', cursive;color: #FF3333;">Our Mission </p>
									<p>To research and create quality literary products for children.</p>
									<p style="font-family: 'Sniglet', cursive;color: #5bc0de;">Our Values </p>
									<p>Commitment,Quality,Creativity,Respect,Learning</p>
									
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-image">
                                <img src="img/about/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="about-bottom-inner">
                        <div class="col-md-6">
                            <div class="about-image">
                                <img src="img/about/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h2>What we Do</h2>
                                </div>
                                <div class="about-content">
									<p style="font-family: 'Sniglet', cursive;color: #9bba1f;">Creative Writing </p>
									<p>Creative writing is our core business. We seek to write entertaining and inspiring pieces for the little ones. These may come in form on short stories, poetry or simple rhymes.</p>
									<p style="font-family: 'Sniglet', cursive;color: #FF3333;">Motion adaptations </p>
									<p>Some of our stories come in series offering an opportunity for motion adaptation. This may come in form of animations as well as songs.</p>
									<p style="font-family: 'Sniglet', cursive;color: #5bc0de;">Reading events </p>
									<p>We have special reading days for schools where we work with teachers to read with children some of our story books and other books of their choice. We also promote reading activities at family social gathering and partner with other organisations to promote early literacy. </p>
									<a href="Attachment/Igaaza Reading Clubs in Kyankwanzi and Kiboga districts.docx" style="font-family: 'Sniglet', cursive;color: #0000FF;">Download Attachment: Igaaza Reading Clubs in Kyankwanzi and Kiboga districts</a>
									<p style="font-family: 'Sniglet', cursive;color: #FFA500;">Trainings/mentoring </p>
									<p>We have a special interest in working with budding young artists, giving them a chance to include their work in our story books. We seek young artists and introduce to them our work and encourage them to be part of our story creation process. We have special reading days for schools, we work with teachers to read with children some of our story books and other books of their choice.</p>
								
								
                                 </div>   
                            </div>
                        </div>
                    </div>
					
					<div class="about-top-inner2">
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h2>Business Enterprise </h2>
                                </div>
                                <div class="about-content">
									<p>Two years of operational experience have made us revisit our strategies to fit the operating environment. In 2021 we have developed strategies to support our core business. We have integrated crafts, farming as purely business enterprises to support the social business component of Igaaza Creations.</p>
                                    <p style="font-family: 'Sniglet', cursive;color: #9bba1f;">The Social enterprise of early literacy with Igaaza Creations offers </p>
									<p>•	Children’s story books•	Toys•	Themed children’s clothing •	Animated stories </br>•	Songs •	Drama
</p>
									<p style="font-family: 'Sniglet', cursive;color: #FF3333;">Our business arm which supports the social enterprise trades in the following: </p>
									<p><b>Natural Health products:</b> Essential Oils and  Food Supplements</p>
									<p><b>Ducks:</b> Whole slaughtered ducks, duck meat, duck eggs</p>
									<p><b>Crafts:</b> Earrings, necklaces, bangles, anklets </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-image">
                                <img src="img/about/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
					
					
                </div>
		    </div>
		</div>
		<!-- About Us Area End -->
		<!-- Our Team Area Start -->
		<div class="our-team-area">
		    <h2 class="section-title"  style="font-family: 'Sniglet', cursive; font-size: 30px; font-weight: 400;color: #00cbc9;">OUR Team</h2>
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