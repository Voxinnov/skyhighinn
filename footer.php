<!-- Footer -->
	<div class="footer agileits w3layouts">
		<div class="container">
	<div class="row">
			<div class=" agileits w3layouts footer-grids">
				<div class="col-sm-3 footer-grid agileits w3layouts footer-grid-1 wow fadeInUp">
					<a href="#">
						<img style="width: 88%;" src="images/footer/logo.png" alt="" class="img-responsive" ></a>
						  <?php
                    
             
                    $abts  = new About();
                    $abtsContent= $abts->getAbout();
                //print_r($abtsContent);exit;
                 //$abtsCount = count($abtsContent);
              
?>
				<p style="text-align: justify;    color: #fff;"><br><br>
				<?php $contn=strip_tags($abtsContent[0]['abt_dscrpn']);
                            if(strlen($contn)>200)
                            {
                                $subcon=substr($contn, 0, 200);
                                $contn = substr($subcon, 0, strrpos($subcon, ' '));
                            }
                         echo $contn; echo" ...";?></p><a href="about.php">Read More <i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="col-sm-1"></div>

				<div class="col-sm-2 footer-grid agileits w3layouts footer-grid-2 wow fadeInUp">
					<div class="services-grids agileits w3layouts">
					<ul class="agileits w3layouts" style="margin: 0px 0px 0px 0px;">
						<li style="font-size: 22px;color:#2e297e">Quick Links<br><br></li>
						<li><a href="index.php">Home</li>
						<li><a href="about.php">About Us</li>
						<li><a href="abtvaga.php">Activities</li>
						<li><a href="contact.php">Contact</li>
					</ul>
				</div>
		


				<div class="clearfix"></div>

</div>

			</div>
			

				<div class="col-sm-3 footer-grid agileits w3layouts footer-grid-2 wow fadeInUp">
					<div class="services-grids agileits w3layouts" style="margin: 0px 0px 0px 0px;">
					<ul class="agileits w3layouts" >
						<li style="font-size: 22px;color:#2e297e">Address<br><br></li>
						<li><i class="fa fa-map-marker"></i>
                  <div class="fleft location_address"><b>Palozhukumpara waterfalls road,<br>
Kavakulam,Vagamon<br>
Kerala 685503<br> Kolahalamedu,</div>
                </li>
                <li><i class="fa fa-phone"></i>
                  <div class="fleft contact_no">+91 9446930101, +91 9446204438,<br> +91 9747493234 </a>  </div>
                </li>
                <li><i class="fa fa-envelope-o"></i>
                  <div class="fleft contact_mail"><a href="mailto:info@resorthotel.com">info@skyhighinn.com</a>
						</div>
                </li>
					</ul>
				</div>
		


				<div class="clearfix"></div>

</div>
<div class="col-sm-3 footer-grid agileits w3layouts footer-grid-1 wow fadeInUp">
					
				<span style="font-size: 22px;color:#2e297e">Location</span><br><br>
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11450.74748374208!2d76.93473873706557!3d9.664023118447968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zOcKwMzknNDYuMSJOIDc2wrA1NicyNC42IkU!5e0!3m2!1sen!2sin!4v1552105657216"width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		
			

				
</div>
			<div class="row">

<div class="col-md-6 col-sm-6 footer-grids footer-grid agileits w3layouts social wow fadeInUp">
				<ul class="social-icons">
					<li class="agileits w3layouts"><a href="https://www.facebook.com/skyhighinn/" class="facebook agileits w3layouts" target="_blank" title="Go to Our Facebook Page"></a></li>
					<li class="agileits w3layouts"><a href="#" class="twitter agileits w3layouts" title="Go to Our Twitter Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="googleplus agileits w3layouts" title="Go to Our Google Plus Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="instagram agileits w3layouts" title="Go to Our Instagram Account"></a></li>
					<li class="agileits w3layouts"><a href="#" class="youtube agileits w3layouts" title="Go to Our Youtube Channel"></a></li>
				</ul>
			</div>

			<div class="col-md-6 col-sm-6 footer-grids footer-grida agileits w3layouts copyright wow fadeInUp">
				<p>&copy; <?php echo date('Y'); ?> Sky High Inn. All Rights Reserved | Developed by <a href="http://www.voxinnov.com/" target="_blank"><span style="color:red">VOX</span><span style="color:white;">INNOV</span></a>
				 </p>
			</div>
			<div class="clearfix"></div>


</div>







		</div>
	</div>


		<!-- //Footer -->