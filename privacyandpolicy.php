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
        <title>Privacy & Policy || Igaaza Creations</title>
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
					        <h2 style="font-family: 'Sniglet', cursive;color: #00cbc9;">Privacy & Policy</h2> 
					      
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
        <!-- Shop Area Start -->
       <div class="online-banner-area">
		    <div class="container">
		        <div class="banner-title text-center">
		            <h2>Igaaza Creations LTD Privacy policy</h2>
		            <p style="text-align:Center; Padding:5px;text-align:justify;text-justify:inter-word;">We at the igaaza.com site believe that your business is unique and that your privacy is indispensable to you and to us. It’s against that backdrop that we endeavour to protect the information you share with us. To protect your privacy, BRANDS AND CODE through its igaaza.com site follows different principles in accordance with world-wide practices for customer privacy and data protection.
Subject to the Ugandan law which shall be applicable, this privacy policy defines the usage, sharing, storage, retention and protection of the information we collect about you when you visit our igaaza.com site. By visiting the igaaza.com site or by using any of our services, applications or devices, you are accepting the practices described in this Privacy Policy and our Terms of Service in our online agreement. For avoidance of doubt, by using the igaaza.com site in whatever way, you are accepting the terms of this Privacy Policy and our user online Agreement, and you are unequivocally and irrevocably consenting to our collection, use, disclosure, retention, and protection of your personal information as described in this Privacy Policy. </p>
					
					<h2>CONTACT AND COMMUNICATION</h2>
					<p  style="text-align:Center; Padding:5px;text-align:justify;text-justify:inter-word;">Users contacting this igaaza.com site and/or its owners do so at their own discretion and provide any such personal details requested at their own risk. Your personal information is kept private and stored securely until a time it is no longer required or has no use.
In general terms, this igaaza.com site and its owners use any information submitted to provide you with further information about the products / services we offer or to assist you in answering any questions or queries you may have submitted or whereby you the consumer have previously purchased from or enquired about purchasing from the igaaza.com site a product or service. We collect information from you when you register on our igaaza.com site, place an order, subscribe to communications from us, respond to a survey or fill out a form. </p>
					<h2>COLLECTION OF INFORMATION THROUGH THE igaaza.com SITE</h2>
					  <p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">We at the igaaza.com site collect, process, store and retain personal information from you when you use our services by visiting the igaaza.com site, register for an account with us, provide us information whatsoever or add information to your account and/or when you otherwise correspond with us regarding our services on the igaaza.com site.</br>
												The personal information we collect, process, store and retain includes but is not limited to the following:</br>
												Information such as your name, addresses, telephone numbers, fax or email addresses when you register for an account with us.</br>
												Information that you provide when completing your profile on our igaaza.com site.</br>
												Information regarding the buying or selling provided during a transaction connected to your account.</br>
												Information which is financial in nature (such as mobile money, eBay among others) in connection with a transaction on the igaaza.com site.</br>
												On some occasions, when you use our igaaza.com site, you may provide information regarding age, gender, interests and favorites.</br>
												Information we are required or authorized by applicable Uganda laws to collect and process in order to authenticate or identify you or to verify the information we have collected.</br>
												Information regarding your interaction with our igaaza.com site, your advertising preferences, and your communications with us. This is information we may receive from the devices (including mobile devices, computers) you use when you visit our igaaza.com site, information provided on a web form, register for an account with us,  updates or add information to your account among others.</br>
												Geo-location information, including location information from your mobile or cell phone devices.</br>
												Information we collect from you using cookies and similar technologies. For avoidance of doubt, a cookie is a file containing an identifier (a string of letters and numbers) that is sent by a web server to a web browser and is stored by the browser. The identifier is then sent back to the server each time the browser requests a page from the server.</br>
												Information you share on the igaaza.com site with social media sites, or use social media sites to create your account or to connect your account with the respective social media site.</br>

											</p>
				 <h2>USE, STORAGE AND RETENTION OF INFORMATION THROUGH THE igaaza.com SITE</h2>
				  <p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">Upon acquiring information from the igaaza.com site, we use the personal information provided and collected to inter alia; provide you with personalized and tailored advertising and marketing information, improve our services through the igaaza.com site, provide you with a personalized and tailored experience on our igaaza.com site mostly by offering you services and items that you may be interested in, to contact you about your account and our new products on the igaaza.com site, provide you customer service and to detect, prevent, mitigate and investigate fraudulent, fallacious, unlawful or illegal activities on our igaaza.com site. We at the igaaza.com site may use, store and retain your personal information with the following ramification:</br>

											Your information helps Brands and Code through its igaaza.com site to better respond to your individual needs.</br>
											Improve our website offerings based on the information and feedback we receive from you.</br>
											Provide access to and use of our services through the igaaza.com site.</br>
											The Personal information helps us to more effectively respond to your customer service requests and support needs 24/7.</br>
											Your information helps us provide you innovative and novel content that includes items and services that you may like on our igaaza.com site.</br>
											In specific terms, information provided like your email address may aid in order processing, may be used to send you information and updates relating to your order, in addition to receiving occasional igaaza.com news, and updates, related product or service information among others.</br>
											For avoidance of doubt, your consent is critical before any personal information you have given us is shared, exchanged, transferred, or given to any other company for any reason whatsoever.</br>
											Communication, engagement and actions taken through external social media platforms that this website and its owners participate on are custom to the terms and conditions as well as the privacy policies held with each social media platform respectively.</br>
											Users are advised to use social media platforms wisely and communicate / engage upon them with due care and caution in regard to their own privacy and personal details. This website nor its owners will ever ask for personal or sensitive information through social media platforms and encourage users wishing to discuss sensitive details to contact them through primary communication channels such as by telephone or email.  This website may use social sharing buttons which help share web content directly from web pages to the social media platform in question. Users are advised before using such social sharing buttons that they do so at their own discretion and note that the social media platform may track and save your request to share a web page respectively through your social media platform account.</br>
											This website may contain sponsored links and adverts. These will typically be served through our advertising partners, to whom may have detailed privacy policies relating directly to the adverts they serve.</br>
											Clicking on any such adverts will send you to the advertisers’ website through a referral program which may use cookies and will track the number of referrals sent from this website. This may include the use of cookies which may in turn be saved on your computer’s hard drive. Users should therefore note that they click on sponsored external links at their own risk and this igaaza.com site and its owners cannot be held liable for any damages or implications caused by visiting any external links mentioned. For avoidance of doubt, third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</br>
											If you choose not to register or provide personal information, you can still use most of the igaaza.com site. But you will not be able to access areas that require registration.</br>

											If you decide to register, you will be able to select the kinds of information you want to receive from us by subscribing to various services, like placing an order, subscribing to communications from us, responding to a survey or fill out a form. If you do not want us to communicate with you about other offers regarding igaaza.com site  products, programs, events, or services by e-mail, postal mail, or telephone, you may select the option stating that you do not wish to receive marketing messages from BRANDS AND CODE through its igaaza.com site.</br>
											BRANDS AND CODE through its igaaza.com site occasionally allows other companies to offer our registered customers information about their products and services, using postal mail only. If you do not want to receive these offers, you may select the option stating that you do not wish to receive marketing materials from third parties.</br>
											</p>
				<h2>ACCESSIBILITY</h2>
				 <p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">We will provide you through our igaaza.com site with the means to ensure that your personal information is correct and up-to-date. You may review and update this information at any time through our igaaza.com site. There, you can:</br>
											a)     View and edit personal information you have already given us.</br>
											b)    Tell us whether you want us to send you marketing information, or whether you want third parties to send you their offers by email.</br>
											c)     Sign up for electronic newsletters about our services and products.</br>
											d)    Register. Once you register, you won't need to do it again. Wherever you visit our igaaza.com site your information stays with you.</br>
											</p>
				<h2>SECURITY OF YOUR PERSONAL INFORMATION</h2>
				<p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">Brands and Code through its igaaza.com site has taken strong measures to protect the security of your personal information and to ensure that your choices for its intended use are honored. We take strong precautions to protect your data from loss, misuse, unauthorized access or disclosure, alteration, or destruction.</br>
												Your personal information is never shared outside the company without your permission, except under conditions explained in this Privacy Policy. Inside the company, data is stored in password-controlled servers with limited access.</br>
												You also have a significant role in protecting your information. No one can see or edit your personal information without knowing your user name and password, so do not share these with others.</br>
												We will store all the personal information you provide on our secure (password- and firewall-protected) servers.</br>
												All electronic financial transactions entered into through our website will be protected by encryption technology.  You unequivocally and irrevocably acknowledge that the transmission of information over the internet is inherently insecure, and we cannot guarantee the security of data sent over the internet.</br>
												You are responsible for keeping the password you use for accessing our igaaza.com site confidential; we will not ask you for your password (except when you log in to our igaaza.com site).</br>

											</p>

				<h2>WHAT WE DO WITH THE INFORMATION YOU SHARE</h2>
				 <p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">When you open an account on our igaaza.com site, you provide us with your contact information, including your name, email address, telephone contacts among others.  We at the igaaza.com site use this personal information for purposes as described above.</br>
											We occasionally hire other companies to provide limited services on our behalf, including packaging, mailing and delivering purchases, answering customer questions about products or services, sending email and processing event registration. We will only provide those companies the information they need to deliver the service, and they are prohibited from using that information for any other purpose. Any violation of the same by those companies attracts serious legal consequences.</br>
											All in all the disclosure of your personal information may be required of us to provide you access to our services, to comply with our legal obligations under the Ugandan law or international law, to enforce our online user Agreement, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent, fallacious, unlawful or illegal activities related to our services through the igaaza.com site.</br>
											For avoidance of doubt, BRANDS AND CODE through its igaaza.com site will disclose your personal information, without notice, only if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the edicts of the law or comply with legal process served on BRANDS AND CODE (b) protect and defend the rights or property of BRANDS AND CODE and its igaaza.com site, and, (c) act in urgent circumstances to protect the personal safety of users of BRANDS AND CODE through its igaaza.com site, or the public. You unequivocally and irrevocably agree to hold brands and code harmless from any damages whatsoever arising from the disclosure of information in circumstances as described above.</br>
											</p>
				
				 <h2>Amendments to the privacy policy</h2>
				<p class="tm-text" style="text-align:Center; Padding:10px;text-align:justify;text-justify:inter-word;">This igaaza.com Privacy policy may be amended from time to time with or without notice. If we elect to change our privacy policy on this site, we will post those changes on this page and update the Privacy Policy modification date on the igaaza.com site.
											</p>
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