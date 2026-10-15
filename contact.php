<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<title>Sky High Inn</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort in Vagamon, Tourist Home in Vagamon, Homestay in Vagamon, ">

<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->

 <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Animate.CSS --> 	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>
<!-- Body-Font -->	 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<!-- Logo-Font -->	 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
<!-- Navbar-Font --> <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">
<!-- //Fonts -->

</head>
<!-- //Head -->



<!-- Body -->


<body>

	<!-- Header -->
	<div class="header agileits w3layouts" id="home">

		<!-- Navbar -->
		<?php include('header.php'); ?>
		 <?php
                    
                
                    $Objcontact = new Location();
                    $contactContent= $Objcontact->getLocation();
                    //print_r($nrmContent);exit;
                    
             
                  ?>
		<!-- //Navbar -->


		<!-- Banner -->
		
		<div class="banner agileits w3layouts">
			<img src="images/banner/banner3.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">CONTACT</h1>
		</div>
		
		<!-- //Banner -->

	</div>
	<!-- //Header -->

<!---728x90--->


	<!-- Contact -->
	<div class="contact agileits w3layouts">
		<div class="container">

			<h2 class="wow agileits w3layouts slideInLeft">KEEP IN TOUCH WITH US</h2>
			<p class="contact-p wow agileits w3layouts slideInLeft"></p>

			<div class="contact-grids agileits w3layouts">
				<div class="col-md-6 col-sm-6 agileits w3layouts contact-grid contact-grid-1">
					<div class="address wow agileits w3layouts slideInLeft">
						<h4>Address</h4>
						<address>
							
							<span><?php echo $contactContent[0]['cnt_adrs'];?>
							
							</span>
						</address>
					</div>
					<div class="phone wow agileits w3layouts slideInLeft">
						<h4>Phone</h4>
						<p><span class="glyphicon agileits w3layouts glyphicon-earphone" aria-hidden="true"></span> <?php echo $contactContent[0]['cnt_no'];?>,<br>
					
							</p>
						
					</div>
					<div class="email wow agileits w3layouts slideInLeft">
						<h4>Email</h4>
						<p><span class="glyphicon agileits w3layouts glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:<?php echo $contactContent[0]['cnt_email'];?>">
							<?php echo $contactContent[0]['cnt_email'];?></a><br>
							<a href="mailto:sales@accessrooms.com">sales@accessrooms.com</a>
							<br><a href="mailto:accessroomsreservation@gmail.com">accessroomsreservation@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 col-sm-6 agileits w3layouts contact-grid contact-grid-2 wow slideInLeft">
					<form action="#" method="post">
						<input type="text" class="text wow agileits w3layouts slideInLeft" name="Name" placeholder="Name" required="">
						<input type="text" class="text wow agileits w3layouts slideInLeft" name="Email" placeholder="Email" required="">
						<textarea name="Message" class="wow agileits w3layouts slideInLeft" placeholder="Message" required=""></textarea>
						<input type="submit" class="more_btn wow agileits w3layouts slideInLeft" value="Send Message">
					</form>
				</div>
				<div class="clearfix"></div>



			</div></div></div>
	<!-- //contact -->



	<!-- Map-iFrame -->
	<div class="map wow agileits w3layouts slideInUp" id="map">
		<div class="map-hover agileits w3layouts">
	<iframe  src="<?php echo $contactContent[0]['cnt_lcn'];?>" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	
			<div class="map-hover-1 agileits w3layouts"></div>
		</div>
	</div>
	<!-- //Map-iFrame -->








	<!-- footer -->
		<?php include('footer.php'); ?>
		<!-- //footer -->


	<!-- Custom-JavaScript-File-Links -->
	<script  src="js/carousel.js"></script>
	  <script  src="js/index.js"></script>
	    







		<!-- Animate.CSS-JavaScript -->
			<script src="js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
		<!-- //Animate.CSS-JavaScript -->

		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>




</body>
<!-- //Body -->

</html>