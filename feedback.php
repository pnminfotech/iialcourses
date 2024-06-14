<?php
include 'dbConfig.php';
?>
<?php

if(isset($_POST['add'])) {

// create a variable

       
$uname=$_POST['uname'];
$email=$_POST['email'];
$feedback1=$_POST['feedback1'];
$feedback2=$_POST['feedback2'];
$suggest=$_POST['suggest'];
mysqli_query($conn,"INSERT INTO feedback (uname,email,feedback1,feedback2,suggest)
		        VALUES ('$uname','$email','$feedback1','$feedback2','$suggest')");

if(mysqli_affected_rows($conn) > 0){
    echo '<script language="javascript">';
    echo 'alert("Your feedback is send successfully. Thank you!");';
    echo '</script>';
} else {
    echo mysqli_error ($conn);
}
}

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
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Our Feedback</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="feedback.php">feedback</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
	<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>Give Us</span> Feedback</h2>
							<p> </p>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">	
						<div class="col-lg-12 col-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="enroll-form">
									
							<div class="form-head">
								<form action="#" method="post" class="form">
									<div class="form-group">
									<h5 style="color:black">Name:</h5>
									<input type="text" name="uname" placeholder="Full Name *"  style=" width:800px;height:50px;" required/><br>
									</div>
									<div class="form-group">
									<h5 style="color:black">Email:</h5><input type="email" name="email" placeholder="Email ID *" style="width:800px;height:50px;" required/><br>
									</div>
									<h6 style="color:black"><b>How did you hear about this website?</b></h6>
										<input type="radio" name="feedback1" value="social media" style="color:black" /> Social Media<br>
										<input type="radio" name="feedback1" value="advertising" /> Advertising<br>
										<input type="radio" name="feedback1" value="search engine" /> Search Engine<br>
										<input type="radio" name="feedback1" value="friend" /> Friend<br>
										<input type="radio" name="feedback1" value="college" /> College<br>
										<input type="radio" name="feedback1" value="other" /> Other<br><br>
		
									<h6 style="color:black"><b>Are you satisfied that you found out the website?</b></h6>
										<input type="radio" name="feedback2" value="very satisfied" /> Very satisfied<br>
										<input type="radio" name="feedback2" value="satisfied" /> Satisfied <br>
										<input type="radio" name="feedback2" value="Not Satisfied" /> Not satisfied<br><br>
		
								<div class="form-group">
									<h6 style="color:black"><b>How would you suggest I improve it?</b></h6>
										<textarea rows="7" cols="40" name="suggest" class="form-control" style="margin-left:11px;" > </textarea><br><br></div>
									<div class="form-group">
									<div class="button">
											<button type="submit" name="add" class="btn primary">Send Feedback</button>&nbsp;
											<button type="reset" class="btn primary">Reset</button>
										</div>
								</div>
								</form>
							</div>
					
	<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
		
			</div>
    </section>
		
		
		<!--/ End Contact Us -->
		
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
        <script src="js/map-script.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
	
		
    </body>
</html>