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
<!-- Bootstrap-CSS -->  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- Animate.CSS -->  <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>
<!-- Body-Font -->   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
<!-- Logo-Font -->   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
<!-- Navbar-Font --> <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700"         type="text/css">
<!-- //Fonts -->
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */




</style>
 
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
      <h1 class="wow agileits w3layouts fadeInDown">ACTIVITIES</h1>
    </div>
    
    <!-- //Banner -->

  </div>
  <!-- //Header -->

<!---728x90--->


  <!-- Location -->
  <div class="container">
  <div class="location agileits w3layouts">

    <div class="row">

                            

    <div class="tab">
 <?php
                   
                    $Obj  = new Activity();
                    $actvtsContent= $Obj->getAllActivityDetails($id);
                    //print_r($actvtsContent);exit;
                 $actvtsCount = count($actvtsContent);
              
                 for($i = 0; $i<$actvtsCount; $i++)
                  {
                  
?>


   <button class="tablinks" onclick="openCity(event, '<?php echo $actvtsContent[$i]['activity_title'];?>')" id="defaultOpen">
    <?php echo $actvtsContent[$i]['activity_title'];?></button>

  

 <?php } ?>

  
</div>
 <?php
                   
                    $Obj  = new Activity();
                    $actvtsContent= $Obj->getAllActivityDetails($id);
                    //print_r($actvtsContent);exit;
                 $actvtsCount = count($actvtsContent);
              
                 for($i = 0; $i<$actvtsCount; $i++)
                  {
                  
?>
<div id="<?php echo $actvtsContent[$i]['activity_title'];?>" class="tabcontent">
  <div class="col-sm-4">
    <img src="sh_admin/upload/Activity/<?php echo $actvtsContent[$i]['activity_img'];?>" class="actimg" ></div>
  <div class="col-sm-8">
  <h3><?php echo $actvtsContent[$i]['activity_title'];?></h3>
  <p class="pact"> <?php echo $actvtsContent[$i]['activity_dscrptn'];?></p>
</div></div>
 <?php } ?>


  

</div>
</div>
</div>
  <!-- //Location -->

<!---728x90--->


  

<!---728x90--->









  <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- //footer -->


  <!-- Custom-JavaScript-File-Links -->

    
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  
    <script  src="js/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Default-JavaScript -->   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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