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
		<title>COURSE IN MICROPIGMENTATION AND MICROBLADING</title>
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
						<h2>Our Course</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="course-micropigmentation.php">MICROPIGMENTATION &amp; MICROBLADING Course</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Courses -->
		<section class="courses single section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<div class="row">
								<div class="col-lg-8 col-12">
									<!-- Single Course -->
								<div class="single-course">
										<div class="course-head">		
											<img src="images/course/micropigmen1.jpg" alt="#">
										</div>			
									</div>
									<!--/ End Single Course -->
								</div>	
								<div class="col-lg-4 col-12">
									<!-- Course Features -->
									<div class="course-feature">
										<div class="feature-main">
											<h4>Course Features</h4>
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-files-o"></i>
												<span class="label">Lectures</span>
									<?php
                                                          $query = "select c_name,start_date,end_date,start_time,end_time,lecture,duration,skill_level,students,certificate,Assessments,enrolled,fees,info from single_course where id=4";
                                                          $result = mysqli_query($conn, $query);
                                                          while ($row = mysqli_fetch_array($result)) {
                                                            ?>
												<span class="value"><?php echo $row['lecture']; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											
											<!--/ End Single Feature -->
											<!-- Single Feature -->
													<div class="single-feature">
												<i class="fa fa-clock-o"></i>
												<span class="label">Duration</span>
												<span class="value"><?php echo $row['duration']; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-magic"></i>
												<span class="label">Skill Level</span>
												<span class="value"><?php echo $row['skill_level']; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-user"></i>
												<span class="label">Students</span>
												<span class="value"><?php echo $row['students']; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Certificate</span>
												<span class="value"><?php echo $row['certificate']; ?></span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Assessments</span>
												<span class="value"><?php echo $row['Assessments']; ?></span>
											</div>
											<!--/ End Single Feature -->
												<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-users"></i>
												<span class="label">Student Enrolled</span>
												<span class="value"><?php echo $row['enrolled']; ?></span>
											</div>
											<!--/ End Single Feature -->
										</div>
									</div>
									<!--/ End Course Features -->
								</div>	
							</div>	
							<div class="row">
								<div class="col-12">
									<!-- Course Meta -->
									<div class="course-meta">
										<!-- Course Info -->
											<div class="course-info">
										
												<div class="single-info author">
												<i class="fa fa-calendar"></i>
												<h4>Course From:<a href="#"><span><?php echo $row['start_date']; ?></span></a></h4>
											</div>									
											<div class="single-info s-enroll">
												<i class="fa fa-calendar"></i>
												<h4>Course Till:<span><?php echo $row['end_date']; ?></span></h4>
											</div>
											<div class="single-info rattings">
												<i class="fa fa-clock-o"></i>
												<h4>Course Time:<span><?php echo $row['start_time']; ?></span></h4>
											</div>
											<div class="single-info rattings">
												<i class="fa fa-clock-o"></i>
												<h4>Course Time:<span><?php echo $row['end_time']; ?></span></h4>
											</div>
										</div>
										<!--/ End Course Info -->
										<!-- Course Price -->
										<div class="course-price">
										<p><i class="fa fa-rupee"></i><?php echo $row['fees']; ?></p>
											<a href="registration.php" class="btn"><i class="fa fa-users"></i>Enroll Now</a>
											</div>
										<!--/ End Course Price -->
									</div>
									<!--/ End Course Meta -->
								</div>
								<div class="col-12">
									<div class="content">
									<h2><a href="#"><?php echo $row['c_name']; ?> </a></h2>
										<p><?php echo $row['info']; ?></p>
									
									</div>
											<?php 
												}
								?>
								</div>
								<div class="col-lg-6 col-12">
									<div class="course-required">
										<h4>Topics Included </h4>
											<?php
                                                  $query = "select id,topic from syllabus_micropigmentation where id<=6";
                                                  $result = mysqli_query($conn, $query);
                                                  while ($row21 = mysqli_fetch_array($result)) {
                                                    ?>
										
										<ul>
										<li><span><?php echo $row21['id']; ?></span><?php echo $row21['topic']; ?></li>
											
										</ul>
												<?php 
												}
												?>
								
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="course-required">
										<h4> <br></h4>
										<?php
                              $query = "select id,topic from syllabus_micropigmentation where id>6";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
									
										<ul>
												<li><span><?php echo $row['id']; ?></span><?php echo $row['topic']; ?></li>
											
										</ul>
									<?php 
												}
												?>

									</div>
								</div>
									<div class="col-lg-6 col-12">
									<div class="course-required">
												<?php
                              $query = "select id,topic from syllabus_micropigmentation where id>20";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
										<ul>
												<li><span><?php echo $row['id']; ?></span><?php echo $row['topic']; ?></li>
											
										</ul>
									<?php 
												}
												?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		</section>
		<!--/ End Courses -->	
		
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