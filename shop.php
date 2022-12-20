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
        <title>Shop || Igaaza Creations</title>
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
                                                    echo"<img src='img/".$row9['ProductImage']."' alt='' Style='Height:80px; Width:104px;' >";
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
                                    <li class="active"><a href="shop.php">Shop</a></li>
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
					        <h2 >Shop</h2> 
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
        <!-- Shop Area Start -->
        <div class="shopping-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <div class="shop-widget-top">
                                <aside class="widget widget-categories">
                                    <h2 class="sidebar-title text-center">CATEGORY</h2>
                                    <ul class="sidebar-menu">
									<?php
									require_once('connect.php');
									$sales6 ="SELECT Distinct Category FROM `productdetails` order by IDDesc Desc LIMIT 20";
									$result5=mysqli_query($link,$sales6);
									$counter1=1;
									while($row6=mysqli_fetch_assoc($result5)){
										
									$sales7 ="SELECT COUNT(Category) as mynumber FROM `productdetails` where Category='".$row6['Category']."' and Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 20";
									$result8=mysqli_query($link,$sales7);
									if($row8=mysqli_fetch_assoc($result8)){
									 echo"<li>";
																echo"<a href='shop.php?realfetch=".$row6['Category']."'>";
																   echo"<i class='fa fa-angle-double-right'></i>".$row6['Category']."<span>(".$row8['mynumber'].")</span>";
																echo"</a>";
															echo"</li>";	
									}
									}
									?>                                                         
                                    </ul>
                                </aside> 
                                <!--<aside class="widget shop-filter">
                                    <h2 class="sidebar-title text-center">PRICE SLIDER</h2>
                                    <div class="info-widget">
                                        <div class="price-filter">
                                            <div id="slider-range"></div>
                                            <div class="price-slider-amount">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                <div class="widget-buttom">
                                                    <input type="submit"  value="Filter"/>  
                                                    <input type="reset" value="CLEAR" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>  -->                          
                            </div>
                            <div class="shop-widget-bottom">
                                <!--<aside class="widget widget-tag">
                                    <h2 class="sidebar-title">POPULAR TAG</h2>
                                    <ul class="tag-list">
                                        <li>
                                            <a href="#">e-book</a>
                                        </li>
                                        <li>
                                            <a href="#">writer</a>
                                        </li>
                                        <li>
                                            <a href="#">book’s</a>
                                        </li>
                                        <li>
                                            <a href="#">eassy</a>
                                        </li>
                                        <li>
                                            <a href="#">nice</a>
                                        </li>
                                        <li>
                                            <a href="#">author</a>
                                        </li>
                                    </ul>
                                </aside>-->
                                <aside class="widget widget-seller">
                                    <h2 class="sidebar-title">TOP SELLERS</h2>
									<?php
									require_once('connect.php');
									$sales7 ="SELECT ProductName,SUM(Quantity) AS TotalQuantity from orders GROUP BY ProductName ORDER BY SUM(Quantity) LIMIT 2";
									$result8=mysqli_query($link,$sales7);
									while($row8=mysqli_fetch_assoc($result8)){
										$sales6 ="SELECT Description,Cost,ProductImage,IDDesc,ShortDescription,Category FROM `productdetails` where ProductName='".$row8['ProductName']."' order by IDDesc Desc";
										$result5=mysqli_query($link,$sales6);
										$counter1=1;
										if($row5=mysqli_fetch_assoc($result5)){
                                    echo"<div class='single-seller'>";
                                        echo"<div class='seller-img'>";
                                            echo"<img src='img/".$row5['ProductImage']."' style='Height:100px; width:100px' alt=''/>";
                                        echo"</div>";
                                        echo"<div class='seller-details'>";
                                            echo"<a href='shop.php?realfetch=".$row5['Category']."'><h5>".$row8['ProductName']."</h5></a>";
                                            echo"<h5>Shs. ".$row5['Cost']."</h5>";
                                           /* echo"<ul>";
                                                echo"<li><i class='fa fa-star icolor'></i></li>";
                                                echo"<li><i class='fa fa-star icolor'></i></li>";
                                                echo"<li><i class='fa fa-star icolor'></i></li>";
                                                echo"<li><i class='fa fa-star icolor'></i></li>";
                                                echo"<li><i class='fa fa-star icolor'></i></li>";
                                            echo"</ul>";*/
                                        echo"</div>";
                                    echo"</div>";
									}
									}
                                    ?>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-tab-area">
                            <div class="shop-tab-list">
                                <div class="shop-tab-pill pull-left">
                                    <ul>
                                        <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Grid</span></a></li>
                                        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>List</span></a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab-pill pull-right">
                                    <ul>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Show : </label>
                                                <select>
                                                    <option value="09" selected="selected">09</option>
                                                    <option value="09">09</option>
                                                    <option value="08">08</option>
                                                    <option value="07">07</option>
                                                    <option value="06">06</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                                <select>
                                                    <option value="position" selected="selected">Position</option>
                                                    <option value="Name">Name</option>
                                                    <option value="Price">Price</option>
                                                </select>
                                            </div>
                                        </li>	
                                        <li class="shop-pagination"><a href="#">1</a></li>
                                        <li class="shop-pagination"><a href="#">2</a></li>
                                        <li class="shop-pagination"><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="row tab-pane fade in active" id="home">
								<?php
				if(isset($_GET['realfetch'])){
				$realfetchs=$_GET['realfetch'];
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='".$realfetchs."' and Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 20";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                                    echo"<div class='shop-single-product-area'>";
                                        echo"<div class='col-md-4 col-sm-6'>";
											echo"<div class='single-banner'>";
												echo"<div class='product-wrapper'>";
													echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
														echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:280px;'>";
														echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
													echo'</a>';
													echo"<div class='product-description'>";
														echo"<div class='functional-buttons'>";
															echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
																echo"<i class='fa fa-shopping-cart'></i>";
															echo"</a>";
															echo"<a href='single-product1?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
																echo"<i class='fa fa-heart-o'></i>";
															echo"</a>";
															 /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
														echo"</div>";
													echo"</div>";
												echo"</div>";
												echo"<div class='banner-bottom text-center'>";
													echo"<div class='banner-bottom-title'>";
														echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
													echo"</div>";
													/*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
												echo"</div>";
											echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									}
				}
				else if(isset($_GET['search'])){
				$realfetchs=$_GET['search'];
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category like '".$realfetchs."%' OR ProductName like '".$realfetchs."%' order by IDDesc Desc LIMIT 20";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                                    echo"<div class='shop-single-product-area'>";
                                        echo"<div class='col-md-4 col-sm-6'>";
											echo"<div class='single-banner'>";
												echo"<div class='product-wrapper'>";
													echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
														echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:280px;'>";
														echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
													echo'</a>';
													echo"<div class='product-description'>";
														echo"<div class='functional-buttons'>";
															echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
																echo"<i class='fa fa-shopping-cart'></i>";
															echo"</a>";
															echo"<a href='single-product1?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
																echo"<i class='fa fa-heart-o'></i>";
															echo"</a>";
															 /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
														echo"</div>";
													echo"</div>";
												echo"</div>";
												echo"<div class='banner-bottom text-center'>";
													echo"<div class='banner-bottom-title'>";
														echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
													echo"</div>";
													/*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
												echo"</div>";
											echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									}
				}
				else{
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 20";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
					echo"<div class='shop-single-product-area' >";
                                        echo"<div class='col-md-4 col-sm-6'>";
											echo"<div class='single-banner'>";
												echo"<div class='product-wrapper'>";
													echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
														echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:280px;'>";
														echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
													echo'</a>';
													echo"<div class='product-description'>";
														echo"<div class='functional-buttons'>";
															echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
																echo"<i class='fa fa-shopping-cart'></i>";
															echo"</a>";
															echo"<a href='single-product1?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
																echo"<i class='fa fa-heart-o'></i>";
															echo"</a>";
															 /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
														echo"</div>";
													echo"</div>";
												echo"</div>";
												echo"<div class='banner-bottom text-center' style='height:50px;'>";
													echo"<div class='banner-bottom-title' style='white-space: nowrap; width:275px; overflow:auto;'>";
														echo"<a href='single-product.php?ids=".$row5['IDDesc']."' >".$row5['ProductName']."</a>";
													echo"</div>";
													/*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
												echo"</div>";
											echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
				}
				}
									?>
                                </div>
								
                                <div id="menu1" class="tab-pane fade">
								<?php
								if(isset($_GET['realfetch'])){
				$realfetchs=$_GET['realfetch'];
				require_once('connect.php');
				$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category='".$realfetchs."' and Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 20";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                                    echo"<div class='row'>";
                                        echo"<div class='single-shop-product'>";
                                            echo"<div class='col-xs-12 col-sm-5 col-md-4'>";
                                                echo"<div class='left-item'>";
                                                    echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='".$row5['ProductName']."'>";
                                                        echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:280px; width:280px;'>";
                                                    echo"</a>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='col-xs-12 col-sm-7 col-md-8'>";
                                                echo"<div class='deal-product-content'>";
                                                    echo"<h4>";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='".$row5['ProductName']."'>".$row5['ProductName']."</a>";
                                                    echo"</h4>";
                                                    echo"<div class='product-price'>";
                                                        echo"<span class='new-price'>".$row5['Cost']."</span>";
                                                        //echo"<span class='old-price'>$ 120.00</span>";
                                                    echo"</div>";
                                                   /*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
                                                    echo"<p>".$row5['ShortDescription']."</p>";
                                                    echo"<div class='availability'>";
                                                        echo"<span>In stock</span>";
                                                        echo"<span><a href='single-product.php?ids=".$row5['IDDesc']."'>Add to cart</a></span>";
                                                    echo"</div>";
                                                echo"</div>";
                                            echo"</div>";
                                        echo"</div>";   
                                    echo"</div>";
									
									
									}
									}
									else if(isset($_GET['search'])){
									$realfetchs=$_GET['search'];
									require_once('connect.php');
									$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Category like '".$realfetchs."%' OR ProductName like '".$realfetchs."%' order by IDDesc Desc LIMIT 20";
									$result5=mysqli_query($link,$sales6);
									$counter1=1;
									while($row5=mysqli_fetch_assoc($result5)){
                                    echo"<div class='shop-single-product-area'>";
                                        echo"<div class='col-md-4 col-sm-6'>";
											echo"<div class='single-banner'>";
												echo"<div class='product-wrapper'>";
													echo"<a href='single-product.php?ids=".$row5['IDDesc']."' class='single-banner-image-wrapper'>";
														echo"<img alt='' src='img/".$row5['ProductImage']."' style='Height:280px; width:280px;'>";
														echo"<div class='price'><span>Shs.</span>".$row5['Cost']."</div>";
													echo'</a>';
													echo"<div class='product-description'>";
														echo"<div class='functional-buttons'>";
															echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='Add to Cart'>";
																echo"<i class='fa fa-shopping-cart'></i>";
															echo"</a>";
															echo"<a href='single-product1?ids=".$row5['IDDesc']."' title='Add to Wishlist'>";
																echo"<i class='fa fa-heart-o'></i>";
															echo"</a>";
															 /*echo"<a href='ids=".$row5['IDDesc']."' title='Quick view' data-toggle='modal' data-target='#productModal'>";
                                                            echo"<i class='fa fa-compress'></i>";
                                                        echo"</a>";*/
														echo"</div>";
													echo"</div>";
												echo"</div>";
												echo"<div class='banner-bottom text-center'>";
													echo"<div class='banner-bottom-title'>";
														echo"<a href='single-product.php?ids=".$row5['IDDesc']."'>".$row5['ProductName']."</a>";
													echo"</div>";
													/*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
												echo"</div>";
											echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
									}
									}
										else{
									require_once('connect.php');
									$sales6 ="SELECT ProductName,Description,Cost,ProductImage,IDDesc,ShortDescription FROM `productdetails` where Availability='Available' and Approval='Approved' order by IDDesc Desc LIMIT 20";
									$result5=mysqli_query($link,$sales6);
									$counter1=1;
									while($row5=mysqli_fetch_assoc($result5)){
					                   echo"<div class='row'>";
                                        echo"<div class='single-shop-product'>";
                                            echo"<div class='col-xs-12 col-sm-5 col-md-4'>";
                                                echo"<div class='left-item'>";
                                                    echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='".$row5['ProductName']."'>";
                                                        echo"<img src='img/".$row5['ProductImage']."' alt='' style='Height:280px; width:280px;'>";
                                                    echo"</a>";
                                                echo"</div>";
                                            echo"</div>";
                                            echo"<div class='col-xs-12 col-sm-7 col-md-8'>";
                                                echo"<div class='deal-product-content'>";
                                                    echo"<h4 >";
                                                        echo"<a href='single-product.php?ids=".$row5['IDDesc']."' title='".$row5['ProductName']."'>".$row5['ProductName']."</a>";
                                                    echo"</h4>";
                                                    echo"<div class='product-price'>";
                                                        echo"<span class='new-price'>Shs. ".$row5['Cost']."</span>";
                                                        //echo"<span class='old-price'>$ 120.00</span>";
                                                    echo"</div>";
                                                   /*echo"<div class='rating-icon'>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star icolor'></i>";
														echo"<i class='fa fa-star'></i>";
														echo"<i class='fa fa-star'></i>";
													echo"</div>";*/
                                                    echo"<p>".$row5['ShortDescription']."</p>";
                                                    echo"<div class='availability'>";
                                                        echo"<span>In stock</span>";
                                                        echo"<span><a href='single-product.php?ids=".$row5['IDDesc']."'>Add to cart</a></span>";
                                                    echo"</div>";
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
        </div>
        <!-- Shop Area End -->
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