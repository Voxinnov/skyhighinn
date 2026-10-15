
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <!-- Page Title -->
    <title> Skyhighinn </title>

    <!-- Icon fonts -->
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Animate.CSS --> 	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
<!-- Header -->
	<div class="header agileits w3layouts" id="home">

		<!-- Navbar -->
		<?php include('header.php'); ?>
		<!-- //Navbar -->


		<!-- Banner -->
		
		<div class="banner agileits w3layouts">
			<img src="images/banner/banner3.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">GALLERY</h1>
		</div>
		
		<!-- //Banner -->

	</div>
	<!-- //Header -->



        <!-- start recent-projects-s3 -->
        <section class="recent-projects-s3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters projects-menu">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All </a></li>



 <?php
                   
                    $Obj  = new Galtyp();
                    $svsContent= $Obj->getAllGaltypDetails();
                    //print_r($svContent);exit;
                  $svsCount = count($svsContent);
              
                 for($i = 0; $i<$svsCount; $i++)
                  {
                  
?>



            <li><a data-filter=".sv<?php echo $svsContent[$i]['galtyp_id'];?>"href="#">
                       <?php echo $svsContent[$i]['galtyp_name'];?></a></li>       
                                <?php } ?> 
                            </ul>
                        </div>
                        <div class="projects-grids gallery-container clearfix">


                             <?php
                   
                    $Obj  = new Gallery();
                    $pctContent= $Obj->getAllGalleryDetails();
                    //print_r($pctContent);exit;
                 $pctCount = count($pctContent);
              
                 for($i = 0; $i<$pctCount; $i++)
                  {
                  
?>
                          
                            
                           
                            <div class="grid sv<?php echo $pctContent[$i]['gal_typ_cata'];?>">
                                <div class="img-holder">
                <img src="sh_admin/upload/Gallery/<?php echo $pctContent[$i]['gal_image'];?>" class="imhld" alt>

                                </div>
                                <div class="hover-content">
                                    <div class="details">
                                       
                                        <p class="cat"><?php echo $pctContent[0]['gal_title'];?></p>
                                    </div>
                                </div>
                            </div>
                          
                        
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end recent-projects-s3 -->





        <!-- start site-footer -->
       	<?php include('footer.php'); ?>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->




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


    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>
