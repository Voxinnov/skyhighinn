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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
			<h1 class="wow agileits w3layouts fadeInDown">ABOUT</h1>
		</div>
		
		<!-- //Banner -->

	</div>
	<!-- //Header -->

<!---728x90--->


	<!-- Location -->
	<div class="location agileits w3layouts"><h3>About vagamon</h3>
		<div class="row">
		<div class="container">
			<div class="col-sm-4 agileits w3layouts location-grids location-grids-2 wow slideInLeft">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/aboutvaga/1.jpg" style="height: 223px;">
      </div>
     
    <?php
                    
                
                    $Obj  = new Abtimg();
                    $abtvagaContent= $Obj->getAllAbtimgDetails();
                    //print_r($SliderContent);exit;
                  $abtvagaCount = count($abtvagaContent);
              
                 for($i = 0; $i<$abtvagaCount; $i++)
                  {
                  
?>
     
      <div class="item">
        <img src="sh_admin/upload/About/<?php echo $abtvagaContent[$i]['abt_img_image'];?>"  style="height: 223px;">
      </div>
      <?php } ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
   
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      
      <span class="sr-only">Next</span>
    </a>
  </div></div>

			<div class=" col-sm-8 agileits w3layouts location-grids location-grids-1 wow  slideInRight">
				<?php
                    
                
                    $Objav = new Abtvaga();
                    $avContent= $Objav->getAbtvaga();
                    //print_r($nrmContent);exit;
                    
             
                  ?>
				<p style="text-align: justify;"><?php echo $avContent[0]['av_dscrpn'];?></p>
			</div>
 
		
	</div></div></div>
	<!-- //Location -->

<!---728x90--->


	

<!---728x90--->









	<!-- footer -->
		<?php include('footer.php'); ?>
		<!-- //footer -->


	<!-- Custom-JavaScript-File-Links -->
	<script  src="js/carousel.js"></script>
	  <script  src="js/index.js"></script>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
		<!-- Default-JavaScript -->	  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>





		<!-- Animate.CSS-JavaScript -->
			<script src="js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
		<!-- //Animate.CSS-JavaScript -->

	

		

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->




<!-- Mirrored from demo.w3layouts.com/demos_new/01-02-2017/tropical_resorts-demo_Free/1676109126/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 10:00:17 GMT -->
</html>