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
 <style>
 .share_box{
	position:fixed;
	
	top:30%;
	left:0%;
	
 
 
		z-index:1000
}
.share_box a:hover{
text-decoration:none;
}
.share_box a img 
{
	width:110px;
}
@media only screen and (max-width: 767px) {
  .share_box a img 
{
	width:55px;
}
}
 </style>	
</head>
<!-- //Head -->



<!-- Body -->
<body>

<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>


	<!-- Header -->
	<div class="col-sm-6" >

	<div style="margin-left:60%;"  >
				<a class="navbar-brand agileits w3layouts logos" href="#"><img src="images/header/SKYHIGHINN.png" alt="Awesome Image" ></a>
			</div>
		</div>
		 <!-- header -->
		<?php include('header.php'); ?>
		<!-- //header -->
	<div class="header agileits w3layouts" id="home">

	



		<!-- Slider1 -->

		<div class="slider agileits w3layouts">
			<div class="slider-1 agileits w3layouts">

				
			
				<ul class="rslides agileits w3layouts" id="slider1">
					<?php
                    
                
                    $Obj  = new Slider();
                    $sldrContent= $Obj->getAllSliderDetails();
                    //print_r($SliderContent);exit;
                  $sldrCount = count($sldrContent);
              
                 for($i = 0; $i<$sldrCount; $i++)
                  {
                  
?>
		
				<li>
					<img src="sh_admin/upload/slider/<?php echo $sldrContent[$i]['sldr_img'];?>" alt="Agileits W3layouts">
					<div class="caption agileits w3layouts">
						<h3><?php echo $sldrContent[$i]['sldr_cptn'];?></h3>
					</div>
				</li>

<?php } ?>
			</ul>
			
			</div>
		</div>



		<!-- //Slider1 -->
		<div class="clearfix"></div>

	</div>
	<!-- //Header -->

<!---728x90--->


	<!-- Projects -->
	<div class="projects agileits w3layouts">
		<div class="container">

			<div class="col-md-7 col-sm-6 projects-grid agileits w3layouts projects-grid1 wow slideInLeft">
				<!-- Slider2 -->
				<div class="slider-2 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider2" style=" border: 5px solid #b6afa0;">

						<?php
                    
                
                    $Obj  = new Abtimg();
                    $abtimgContent= $Obj->getAllAbtimgDetails();
                    //print_r($SliderContent);exit;
                  $abtimgCount = count($abtimgContent);
              
                 for($i = 0; $i<$abtimgCount; $i++)
                  {
                  
?>
						<li>
				<img src="sh_admin/upload/About/<?php echo $abtimgContent[$i]['abt_img_image'];?>" alt="Agileits W3layouts">
						</li>
					
						<?php
					}
					?>
					</ul>
				</div>
				<!-- //Slider2 -->

				<!-- Slider3 -->
				<div class="slider-3 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider3" style=" border: 5px solid #b6afa0;">


						<?php
                    
                
                    $Obj  = new Acimg();
                    $acimgContent= $Obj->getAllAcimgDetails();
                    //print_r($SliderContent);exit;
                  $acimgCount = count($acimgContent);
              
                 for($i = 0; $i<$acimgCount; $i++)
                  {
                  
?>
						<li>
			<img src="sh_admin/upload/Accomodation/<?php echo $acimgContent[$i]['acmdtn_img_photo'];?>" alt="Agileits W3layouts">
						</li>
						
						
						<?php
					}
					?>
					</ul>
				</div>
				<!-- //Slider3 -->
			</div>

			<div class="col-md-5 col-sm-6 projects-grid agileits w3layouts projects-grid2 wow slideInRight">

				<?php
                    
             
                    $abt  = new About();
                    $abtContent= $abt->getAbout();
                //print_r($abt1Content);exit;
                 //$abt1Count = count($abt1Content);
              
?>

				<h1><span style="font-size: 25px;">WELCOME TO SKY HIGH INN</span></h1>
				<h4>BEST RESORTS</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
				<p style="text-align: justify;">
                          


<?php $contn=strip_tags($abtContent[0]['abt_dscrpn']);
                            if(strlen($contn)>2000)
                            {
                                $subcon=substr($contn, 0, 2000);
                                $contn = substr($subcon, 0, strrpos($subcon, ' '));
                            }
                         echo $contn; echo" ...";?><br><br>
				<a class="agileits w3layoutswow slideInLeft" href="about.php">More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true" ></span></a>
			</div>
			
		</div>
	</div>
	<!-- //Projects -->

<!---728x90--->


	<!-- Awards -->
	<div class="awards agileits w3layouts">

		<h3>ACTIVITIES</h3>



<div class="container">
	<div class="row">
		<div class="col-xs-11 col-md-10 col-centered">

			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
				<div class="carousel-inner">
						<?php
					
				
					$Obj  = new Activity();
					$activContent= $Obj->getAllActivityDetails();
					//print_r($activContent);exit;
                  $activCount = count($activContent);
              
				 for($i = 0; $i<$activCount; $i++)
                  {
                  
?>
						<div class="item <?php if($i==0){ echo 'active'; } ?>">
						<div class="carousel-col">
<div class="block img-responsive sldr_hr act_img"
style="background-image: url(sh_admin/upload/Activity/<?php echo $activContent[$i]['activity_img'];?>); background-size:cover;border: 3px solid #1ec8c8;"> <div class="acti">
<a href="activities.php"><span align="center" style="color:#fff;">
	<?php echo $activContent[$i]['activity_title'];?></span></a></div></div>
						</div>
					</div>
				<?php } ?>
			
				</div>

				<!-- Controls -->
				<div class="left carousel-control">
					<a href="#carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="right carousel-control">
					<a href="#carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>

	</div>
	<!-- //Awards -->



	<!-- Services -->
	<div class="services agileits w3layouts">
		<div class="container">

			<div class="services-grids agileits w3layouts">
				<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid1 wow slideInLeft">
					  <?php
                    
                
                    $Objabt = new Abtvaga();
                    $abtvagaContent= $Objabt->getAbtvaga();
                    //print_r($nrmContent);exit;
                    
             
                  ?>
					<h2><?php echo $abtvagaContent[0]['av_title'];?></h2>
	<p style="text-align: justify;"><?php $contn=strip_tags($abtvagaContent[0]['av_dscrpn']);
                            if(strlen($contn)>500)
                            {
                                $subcon=substr($contn, 0, 500);
                                $contn = substr($subcon, 0, strrpos($subcon, ' '));
                            }
                         echo $contn; echo" ...";?></p>
                         <a class="agileits w3layoutswow slideInLeft" href="abtvaga.php">More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true" ></span></a>
				</div>

				<div class="col-md-6 col-sm-6 services-grid agileits w3layouts services-grid2 wow slideInRight">
					<img src="images/about/abtvaga.jpg" alt="Agileits W3layouts">
				</div>
				<div class="clearfix"></div>
			</div>

			
		</div>
	</div>
	<!-- //Services -->

<!---728x90--->
	<div class="services agileits w3layouts promo-outer">
		<div class="container ">
<p class="testi">TESTIMONIAL</p>
			<div class="services-grids agileits w3layouts ">
					<div class="slider-4 agileits w3layouts tes">
					<ul class="rslides agileits w3layouts" id="slider4">


						<?php
                    
                
                    $Obj  = new Testimonial();
                    $testiContent= $Obj->getAllTestimonial();
                    //print_r($SliderContent);exit;
                  $testiCount = count($testiContent);
              
                 for($i = 0; $i<$testiCount; $i++)
                  {
                  
?>
						<li>
							<p class="tes" style="font-family:'Playball';"><?php echo $testiContent[$i]['testi_dscrptn'];?></p>
							<h4><?php echo $testiContent[$i]['testi_title'];?></h4>
						</li>
					
					<?php } ?>
					</ul>
				</div>
			</div>

			
		</div>
	</div>



	<!-- footer -->
		<?php include('footer.php'); ?>
		<!-- //footer -->


	


	<!-- Custom-JavaScript-File-Links -->
	  <script  src="js/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
		<!-- Default-JavaScript -->	  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>




<script>
$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
</script>
		<!-- Animate.CSS-JavaScript -->
			<script src="js/wow.min.js"></script>
				<script>
					new WOW().init();
				</script>
		<!-- //Animate.CSS-JavaScript -->

		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider1, #slider2, #slider3, #slider4").responsiveSlides({
						auto: true,
						nav: true,
						speed:2500,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Slider-JavaScript -->

		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

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