<?php
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>welcome</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="css/color/color1.css">
		<!--<link rel="stylesheet" href="css/color/color2.css">-->
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color7.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
		<link rel="stylesheet" href="#" id="colors">	
		<style type="text/css">
		

		
		
		</style>
    </head>
    <body>
		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->
	
		<!-- Mp Color -->

		<!--/ End Mp Color -->
	
		<!-- Header -->
	<?php  include "header.php" ?>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>FAQ's</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="faqs.html">FAQ's</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
			
		<!-- Faqs -->
		<section class="faq page section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Frequently<span> Asked</span>Questions</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-12">
						<div class="faq-content">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default active">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle1">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq1">
											<?php
                                              $query = "select que,ans from faqs where f_id=1";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>			
											
											
											</a>
											
										</h4>
									</div>
									<div id="faq1" class="panel-collapse collapse active" role="tabpanel" aria-labelledby="FaqTitle1">
									<div class="faq-body"><?php echo $row['ans']; ?>		
									<?php 
												}
											?>
											</div>
									</div>
									<!--/ End Single Faq -->
								</div>
									<div class="panel panel-default ">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle2">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2">
											
												<?php
                                              $query = "select que,ans from faqs where f_id=2";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>		
											
											</a>
											
										</h4>
									</div>
									<div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle2">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php 
												}
											?>
											</div>
									</div>
									<!--/ End Single Faq -->
								</div>
									<div class="panel panel-default">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle3">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3">
									
												<?php
                                              $query = "select que,ans from faqs where f_id=3";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>	
											
											</a>
											
										</h4>
									</div>
									<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle3">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php 
												}
											?>
											</div>
									</div>
									<!--/ End Single Faq -->
								</div>
								<div class="panel panel-default">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle4">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4">		
											
											<?php
                                              $query = "select que,ans from faqs where f_id=4";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>
											</a>
										</h4>
									</div>
									<div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle4">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php 
												}
											?></div>
									<!--/ End Single Faq -->
								</div>
								</div>
								<div class="panel panel-default">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle5">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq5">	

												<?php
                                              $query = "select que,ans from faqs where f_id=5";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>
												</a>
										</h4>
									</div>
									<div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle5">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php 
												}
											?></div>
									</div>
									<!--/ End Single Faq -->
								</div>
								<div class="panel panel-default">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle6">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq6">	
											<?php
                                              $query = "select que,ans from faqs where f_id=6";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>
												</a>
										</h4>
									</div>
									<div id="faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle6">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php 
												}
											?></div>
									</div>
									<!--/ End Single Faq -->
								</div>
									<div class="panel panel-default">
									<!-- Single Faq -->
									<div class="faq-heading"  id="FaqTitle7">
										<h4 class="faq-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq7">	
											<?php
                                              $query = "select que,ans from faqs where f_id=7";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                                ?>
									
												<?php echo $row['que']; ?>
												</a>
										</h4>
									</div>
									<div id="faq7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle7">
									<div class="faq-body"><?php echo $row['ans']; ?>
									<?php
												}
												?></div>
									</div>
									<!--/ End Single Faq -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
			<?php  include "footer.php" ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Particle JS -->
		<script src="js/particles.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Masonry JS-->
		<script src="js/masonry.pkgd.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Wow Min JS-->
		<script src="js/wow.min.js"></script>
		<!-- Scroll Up JS-->
    
		<!-- Google Maps JS -->
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>