<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<!-- Mirrored from demo.w3layouts.com/demos_new/01-02-2017/tropical_resorts-demo_Free/1676109126/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 09:59:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<title>Sky High Inn</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

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
		<!-- //Navbar -->


		<!-- Banner -->
		
		<div class="banner agileits w3layouts">
			<img src="images/banner/banner3.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">TARIFF</h1>
		</div>
		
		<!-- //Banner -->

	</div>
	<!-- //Header -->
	<div class="container">
		 <?php
                    
                
                    $Objtariff = new Tariff();
                    $tariffContent= $Objtariff->getTariff();
                    //print_r($nrmContent);exit;
                    
             
                  ?>
	<div class="col-sm-12">

		<p style="text-align: justify;"><?php echo $tariffContent[0]['tarrif_dscrptn'];?></p>
	</div>	</div>


<!---728x90--->



<!---728x90--->


	

<!---728x90--->









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