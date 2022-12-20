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
        <title>Home|| Igaaza Creations</title>
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
	<?php 
if(isset($_SESSION['igaazauser'])){
	}
	else{
				$_SESSION['igaazauser']="Guest";
				require_once('connect.php');
				$query = "INSERT INTO `guests` (nos) VALUES('1')";
				$results=mysqli_query($link,$query);				
				$sales12 ="SELECT COUNT(IDs) as Carttotals from guests";
				$resultss=mysqli_query($link,$sales12);
				if($resultss)
				{
					if($row9=mysqli_fetch_assoc($resultss)){
					$_SESSION['igaazaemail']= $row9['Carttotals'];
					$_SESSION['igaazaTelephone']= 0;
					}
				}
		
		}
?>
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
                                    <li class="active"><a href="index.php">HOME</a></li>
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
                                    <li class="active"><a href="index.php">HOME</a></li>
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
        <!-- slider Area Start -->
		<div class="slider-area">
			<div class="bend niceties preview-1">
				<div id="ensign-nivoslider" class="slides">	
					<img src="img/slider/1.jpg" alt="" title="#slider-direction-1"  />
					<img src="img/slider/2.jpg" alt="" title="#slider-direction-2"  />
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="text-center slider-direction">
					<!-- layer 1 -->
					<div class="layer-1">
						<h3 class="title-1">WE TURN IMAGINATIONS TO REAL STORIES</h3>
					</div>
					<!-- layer 2 -->
					<div class="layer-2">
						<p class="title-2">We Write, Edit and Publish Story Books for Children But also Sell other Products.</p>
					</div>
					<!-- layer 3 -->
					<div class="layer-3">
						<a href="shop.php" class="title-3">GET STARTED</a>
					</div>
					<!-- layer 4 -->
					<div class="layer-4">
                        <form action="shop.php" method="GET" class="title-4">
                            <input type="text" name="search" placeholder="Search Your Product here...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
					</div>
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<!-- layer 1 -->
					<div class="layer-1">
						<h3 class="title-1">LET’S WRITE IMAGINE</h3>
					</div>
					<!-- layer 2 -->
					<div class="layer-2">
						<p class="title-2">We Design, Illustrate Stories for Children and also mentor them.</p>
					</div>
					<!-- layer 3 -->
					<div class="layer-3">
						<a href="Services.php" class="title-3">SEE MORE</a>
					</div>
					<!-- layer 4 -->
					<div class="layer-4">
                        <form action="shop.php" method="GET" class="title-4">
                            <input type="text" name="search" placeholder="Search Your Product here...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="featured-product-area section-padding">
            <h2 class="section-title">PRODUCTS</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-menu">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="first-item active">
                                    <a href="#arrivalall" aria-controls="arrivalall" role="tab" data-toggle="tab">All</a>
                                </li>
								  <li role="presentation" class="second-item">
									<a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">Books</a>
                                </li>
								  <li role="presentation" class="third-item">
									<a href="#Beesproducts" aria-controls="Beesproducts" role="tab" data-toggle="tab">Bees products</a>
                                </li>
								  <li role="presentation" class="fourth-item">
									<a href="#Crafts" aria-controls="Crafts" role="tab" data-toggle="tab">Crafts</a>
                                </li>
                            </ul>
                        </div>         
                    </div>
                </div>   
                <div class="row">
                    <div class="product-list tab-content">
                        <div role="tabpanel" class="tab-pane" id="arrival">
                         <div class='featured-product-list indicator-style'>  
								<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='Books' and Availability='Available' and Approval='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                    /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                        echo"</a>";
                                                       /* echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
				}
									?>
                             </div>   
                        </div>
						
						 <div role="tabpanel" class="tab-pane" id="Beesproducts">
                         <div class='featured-product-list indicator-style'>  
								<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='Bees Products' and Availability='Available' and Approval='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                     /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                         echo"</a>";
                                                        /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
				}
									?>
                             </div>   
                        </div>
						
						<div role="tabpanel" class="tab-pane" id="Crafts">
                         <div class='featured-product-list indicator-style'>  
								<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='Crafts' and Availability='Available' and Approval='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                    /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                          echo"</a>";
                                                        /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
				}
									?>
                             </div>   
                        </div>
						
						
						<div role="tabpanel" class="tab-pane  fade in active" id="arrivalall">
                         <div class='featured-product-list indicator-style'>  
								<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' and Approval='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5))
				{
					
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                    /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                          echo"</a>";
                                                        /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
				}
									?>
                             </div>   
                        </div>
						
                    </div>
                </div>             
            </div>
		</div>
		
		
		<!-- slider Area End-->    
		<!-- Online Banner Area Start -->    
		<div class="online-banner-area">
		    <div class="container">
		        <div class="banner-title text-center">
		            <h2>Why Read Story Books <span>From an early Age!</span></h2>
		            <p style="text-align:justify;text-justify:inter-word;">Read story books with your child from an early age. Reading story books from an early age is essential in the development of children as it helps them to
    Develop imaginations and speech
    Development of skills & knowledge for everyday use.
    Develop the art of imagination, which in turn supports cognitive growth
    Develop spelling, writing, listening & social skills
    Build cherished memories founded on the bonds developed between child & parent
    Helps to develop an early interest in books & reading.
	From entertainment to learning, to inspiration and to action, Igaaza Creations produces stories to be enjoyed by all. We hope you will read with your little ones from an early age, at every opportunity you get.</p>
		        </div>			
		    </div>
		</div>
		<!-- Online Banner Area End -->   
		<!-- Shop Info Area Start -->   
		<div class="shop-info-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-4 col-sm-6">
		                <div class="single-shop-info">
		                    <div class="shop-info-icon">
		                        <i class="flaticon-transport"></i>
		                    </div>
		                    <div class="shop-info-content">
		                        <h2>FREE Delivery</h2>
		                        <p>Delivery is made to your email in case of soft copy  Purchase of our books and audio visual products . </p>
		                        <!--<a href="#">READ MORE</a>-->
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 col-sm-6">
		                <div class="single-shop-info">
		                    <div class="shop-info-icon">
		                        <i class="flaticon-money"></i>
		                    </div>
		                    <div class="shop-info-content">
		                        <h2>Easy Payment</h2>
		                        <p>All payments can be made through this website using the different acceptable payment methods provided but also physical cash payments are acceptable for those who pickup the products. </p>
		                        <!--<a href="#">READ MORE</a>-->
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 hidden-sm">
		                <div class="single-shop-info">
		                    <div class="shop-info-icon">
		                        <i class="flaticon-school"></i>
		                    </div>
		                    <div class="shop-info-content">
		                        <h2>Free EBooks</h2>
		                        <p>We offer free books on promotional Events and these can be delivered to your email in soft copy. </p>
		                        <!--<a href="#">READ MORE</a>-->
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> 
		<!-- Shop Info Area End -->
		<!-- Featured Product Area Start -->
		<div class="featured-product-area section-padding">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-menu">
                            <!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="first-item active">
                                    <a href="#Books" aria-controls="Books" role="tab" data-toggle="tab">Featured</a>
                                </li>
								  <li role="presentation" class="second-item">
									<a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">BEST SELLERS</a>
                                </li>
                            </ul>
                        </div>         
                    </div>
                </div>   
                <div class="row">
                    <div class="product-list tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Books">
                         <div class='featured-product-list indicator-style'>  
								<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where FEATURED='Yes' and Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 8";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                     /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                        echo"</a>";
                                                       /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
				}
									?>
                             </div>   
                        </div>
						
                        <div role="tabpanel" class="tab-pane" id="sale">
                            <div class="featured-product-list indicator-style">
                   <?php
									require_once('connect.php');
									$sales7 ="SELECT ProductName,SUM(Quantity) AS TotalQuantity from orders GROUP BY ProductName ORDER BY SUM(Quantity) LIMIT 8";
									$result8=mysqli_query($link,$sales7);
									while($row8=mysqli_fetch_assoc($result8)){
										$sales6 ="SELECT Description,ProductName,Cost,ProductImage,IDDesc,ShortDescription,Category FROM `productdetails` where ProductName='".$row8['ProductName']."' order by IDDesc Desc";
										$result5=mysqli_query($link,$sales6);
										$counter1=1;
										if($row5=mysqli_fetch_assoc($result5)){
                                echo "<div class='single-p-banner'>";
                                   echo "<div class='col-md-3'>";
                                        echo"<div class='single-banner'>";
                                            echo"<div class='product-wrapper'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
                                                    echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:100%;'>";
                                                    echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
                                                     /*echo"<div class='rating-icon'>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star icolor'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                        echo"<i class='fa fa-star'></i>";
                                                    echo"</div>";*/
                                                echo"</a>";
                                                echo"<div class='product-description'>";
                                                    echo"<div class='functional-buttons'>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
                                                            echo"<i class='fa fa-shopping-cart'></i>";
                                                        echo"</a>";
                                                        echo"<a href='single-product1.php?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
                                                            echo"<i class='fa fa-heart-o'></i>";
                                                        echo"</a>";
                                                        /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='banner-bottom text-center'>";
                                                echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									 echo"</div>";
										}
									}
				?>
                            </div>
                        </div>
						
						
                    </div>
                </div>             
            </div>
		</div>
		<!-- Featured Product Area End -->
		<!-- Testimonial Area Start -->
		<div class="testimonial-area text-center">
		    <div class="container">
                <div class="testimonial-title">
                    <h2>OUR TESTIMONIAL</h2>
                    <p>What our clients say about the books reviews and comments</p>
                </div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="testimonial-list">
						<?php
					require_once('connect.php');
				$sales6 ="SELECT Description,Author FROM `testimonials` order by IDDesc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
		                    echo"<div class='single-testimonial'>";
                               echo"<img src='img/testimonial/1.jpg' alt=''>";
		                       echo"<div class='testmonial-info clearfix'>";
                                    echo"<p>".$row5['Description']."</p>"; 
                                   echo"<div class='testimonial-author text-center'>";
                                       echo"<h3>".$row5['Author']."</h3>";
                                       echo"<p></p>";
                                   echo"</div>";
		                       echo"</div>";
		                    echo"</div>";
				}
							?>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Testimonial Area End -->
		<!-- Counter Area Start -->
		<!--<div class="counter-area section-padding text-center">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-3 col-sm-3 col-xs-6">
						<div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
							<div class="counter-info">
								<span class="fcount">
									<span class="counter">3725</span>
								</span>
								<h3>BOOKS READ</h3>								
							</div>
						</div>		                
		            </div>
		            <div class="col-md-3 col-sm-3 col-xs-6">
						<div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
							<div class="counter-info">
								<span class="fcount">
									<span class="counter">950</span>
								</span>
								<h3>ONLINE USERS</h3>								
							</div>
						</div>		                
		            </div>
		            <div class="col-md-3 col-sm-3 col-xs-6">
						<div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
							<div class="counter-info">
								<span class="fcount">
									<span class="counter">1450</span>
								</span>
								<h3>BEST AUTHORS</h3>								
							</div>
						</div>		                
		            </div>
		            <div class="col-md-3 col-sm-3 col-xs-6">
						<div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
							<div class="counter-info">
								<span class="fcount">
									<span class="counter">62</span>
								</span>
								<h3>AWARDS</h3>								
							</div>
						</div>		                
		            </div>
		        </div>
		    </div>
		</div>-->
		<!-- Counter Area End -->
		<!-- Blog Area Start -->
		<div class="blog-area section-padding">
            <h2 class="section-title">Coming Soon</h2>
            <p>The Latest Books that we are working on at igaaza Creations LTD.</p>
		    <div class="container">
		        <div class="row">
		            <div class="blog-list indicator-style">
					<?php
					require_once('connect.php');
				$sales6 ="SELECT ProductName,ProductImage,IDDesc,Author,Category FROM `productdetails` where Availability='Not Available' and Approval='Approved' order by IDDesc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
		                Echo"<div class='col-md-3'>";
		                    Echo"<div class='single-blog'>";
		                        Echo"<a href=''>";
		                            Echo"<img src='imgcoming/".$row5['ProductImage']."' style='Height:200px; width:270px;' alt=''>";
		                        Echo"</a>";
		                        Echo"<div class='blog-info text-center'>";
		                            Echo"<a href='#'><h2>".$row5['ProductName']."</h2></a>";
		                            Echo"<div class='blog-info-bottom'>";
		                                Echo"<span class='blog-author'>BY: <a href='#'>".$row5['Author']."</a></span>";
		                               // Echo"<span class='blog-date'>".$row5['Category']."</span>";
		                            Echo"</div>";
		                        Echo"</div>";
		                    Echo"</div>";
		                Echo"</div>";
				}
						?>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Blog Area End -->
		<!-- News Letter Area Start -->
		<div class="newsletter-area text-center">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="newsletter-title">
		                    <h2>SUBSCRIBE OUR NEWSLETTER</h2>
		                    <p>Subscribe here with your email us and get up to date.</p>
		                </div>
		                <div class="letter-box">
		                    <form method='post' action='mailing2.php' class="search-box">
		                        <div>
                                    <input type="text" type="text" name="emails" id=="emails" placeholder="Subscribe us">
                                    <button type="submit" class="btn btn-search">SUBSCRIBE<span><i class="flaticon-school-1"></i></span></button>
                                </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- News Letter Area End -->
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