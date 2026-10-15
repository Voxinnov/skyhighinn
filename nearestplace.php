



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
			<h1 class="wow agileits w3layouts fadeInDown">NEAREST PLACES</h1>
		</div>
		
		<!-- //Banner -->

	</div>
	<!-- //Header -->

<!---728x90--->


	<!-- Location -->
	<div class="location agileits w3layouts">
		
<?php
					
				
					$Obj  = new Nearest();
					$nearContent= $Obj->getAllNearestDetails();
					//print_r($activContent);exit;
                  $nearCount = count($nearContent);
              
				 for($i = 0; $i<$nearCount; $i++)
                  {
               
?>

		<div class="row" style="padding-bottom: 40px">
	
<?php 
			if ($i%2!=0)
			{   ?>
		<div class="container ">
			


		<div class="testimonial-panel">
			<div class="row">
	
     
     	<div class="col-sm-8">
			
       
                              
                             <p> 	<span class="nrst"><?php echo $nearContent[$i]['nr_title'];?></span> 

                        <br><?php echo $nearContent[$i]['nr_dscrptn'];?></p>
 </div>

 		<div class="col-sm-4">
			
       <img class="nr_img" src="sh_admin/upload/Nearest/<?php echo $nearContent[$i]['nr_image'];?>">
       
     </div>
</div>
</div>
</div>
<?php }?>

			<?php 
			if ($i%2==0)
			{   ?>
		<div class="container ">
			


		<div class="testimonial-panel">
			<div class="row">
			<div class="col-sm-4">
			
     
       <img class="nr_img" src="sh_admin/upload/Nearest/<?php echo $nearContent[$i]['nr_image'];?>">
     </div>
     
     	<div class="col-sm-8">
			
       
                              <p>
                              	<span class="nrst"><?php echo $nearContent[$i]['nr_title'];?></span>

                        <br><?php echo $nearContent[$i]['nr_dscrptn'];?></p>
 </div>
</div>
</div>
</div>
<?php }  ?>



	
</div>







<?php } ?>
</div>
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