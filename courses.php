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
		<title> welcome to COSMETOLOGY Courses</title>
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
<style>
a {
	color:#32346a
}
a:visited {
	color: #32346a
}


a.morelink {
	text-decoration:none;
	outline: none;
}
.morecontent span {
	display: none;

}
</STYLE>	
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
							<li class="active"><a href="courses.php">Courses</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		
		<!-- Courses -->
		<section class="courses archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Clinical <span>Courses</span> We Offer</h2>
							<p>A variety of clinical cosmetology and aesthetic courses for beginners to help set their cosmetic practise.A good amount of hands on with advances Injectable courses gives you a perfect orientation on the subject.  </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
							<!-- Single Course -->
						<div class="single-course">
							<?php
                              $query = "select id,c_name,msg,img from courses where id=1";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
							<div class="course-head overlay">						
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img']).'"  width="200" height="200" />'?>  	
									
								<a href="course_clinical_cosmetology.php" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course_clinical_cosmetology.php" style="font-size:17px;"><span>DIPLOMA</span>
							
										<?php echo $row['c_name'];?>	 </a></h4>
									
								<div class="more"><?php echo $row['msg'];?></div>
											<?php
												}
												?>
							</div>
											 <?php
                                              $query1 = "select start_date,start_time,end_time from single_course where id=1";
                                              $result1 = mysqli_query($conn, $query1);
                                              while ($row1 = mysqli_fetch_array($result1)) {
                                                ?>
					
										
							<div class="course-meta">
								<div class="meta-left">
										<span><i class="fa fa-calendar"></i><?php echo $row1['start_date'] ?></span>
										<span><i class="fa fa-clock-o"></i><?php echo $row1['start_time'] ?> - <?php echo $row1['end_time'] ?></span>
										<span></span>
								</div>
								<?php 
												}
												?>
							</div>
						</div>
						<!--/ End Single Course -->
										<!--/ End Single Course -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Course -->
						<div class="single-course">
								<?php
                              $query = "select id,c_name,msg,img from courses where id=2";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
							<div class="course-head overlay">
						
										<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img']).'"  width="200" height="200" />'?>  	
								
								<a href="course_trichology.php" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course_trichology.php" style="font-size:17px;"><span>CERTIFICATE COURSE</span>
						
											<?php echo $row['c_name'];?>	 </a></h4>
									
								<div class="more"><?php echo $row['msg'];?></div>
									<?php 
												}
												?>
							</div>
							
								 <?php
                                              $query1 = "select start_date,start_time,end_time from single_course where id=2";
                                              $result1 = mysqli_query($conn, $query1);
                                              while ($row1 = mysqli_fetch_array($result1)) {
                                                ?>
										
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-calendar"></i><?php echo $row1['start_date'] ?></span>
										<span><i class="fa fa-clock-o"></i><?php echo $row1['start_time'] ?> - <?php echo $row1['end_time'] ?></span>

										<span></span>
								</div>
								<?php 
												}
												?>
							</div>
						</div>
						<!--/ End Single Course -->
				
					</div>
					<div class="col-lg-4 col-md-6 col-12">
		<!-- Single Course -->
						<div class="single-course">
							<?php
                              $query = "select id,c_name,msg,img from courses where id=3";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
							<div class="course-head overlay">
						
										<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img']).'"  width="200" height="200" />'?>  	
									
								<a href="course_injectables_antiAging.php" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course_injectables_antiAging.php" style="font-size:17px;"><span>MASTER COURSE</span>
							
										<?php echo $row['c_name'];?>	 </a></h4>
									
								<div class="more"><?php echo $row['msg'];?></div>
									<?php 
												}
												?>
							</div>
							
								
								 <?php
                                              $query1 = "select start_date,start_time,end_time from single_course where id=3";
                                              $result1 = mysqli_query($conn, $query1);
                                              while ($row1 = mysqli_fetch_array($result1)) {
                                                ?>
										
							<div class="course-meta">
								<div class="meta-left">
										<span><i class="fa fa-calendar"></i><?php echo $row1['start_date'] ?></span>
										<span><i class="fa fa-clock-o"></i><?php echo $row1['start_time'] ?> - <?php echo $row1['end_time'] ?></span>

										<span></span>
								</div>
							<?php 
												}
												?>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>						
					<div class="col-lg-4 col-md-6 col-12">
							<!-- Single Course -->
						<div class="single-course">
						<?php
                              $query = "select id,c_name,msg,img from courses where id=4";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
							<div class="course-head overlay">
								
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img']).'"  width="200" height="200" />'?>  	
								<a href="course_micropigmentation.php" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course_micropigmentation.php" style="font-size:17px;"><span>CERTIFICATE COURSE</span>
								
										<?php echo $row['c_name'];?>	 </a></h4>
									
								<div class="more"><?php echo $row['msg'];?></div>
									<?php 
												}
												?>
							</div>
							                  <?php
                                              $query1 = "select start_date,start_time,end_time from single_course where id=4";
                                              $result1 = mysqli_query($conn, $query1);
                                              while ($row1 = mysqli_fetch_array($result1)) {
                                                ?>
										
							<div class="course-meta">
								<div class="meta-left">
										<span><i class="fa fa-calendar"></i><?php echo $row1['start_date'] ?></span>
										<span><i class="fa fa-clock-o"></i><?php echo $row1['start_time'] ?> - <?php echo $row1['end_time'] ?></span>

										<span></span>
								</div>
							<?php 
												}
												?>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>
				
					
				</div>
			
			</div>
		
		</section>
		<!--/ End Courses -->	
				
		<!-- Footer -->
		
		<?php  include "footer.php" ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
    	<script src="js/rocket-loader.min.js" data-cf-settings="273c7b0ae6366e0378be8e3f-|49" defer=""></script>
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
	<SCRIPT type="273c7b0ae6366e0378be8e3f-text/javascript">
$(document).ready(function() {
	var showChar = 100;
	var ellipsestext = "...";
	var moretext = "Read more";
	var lesstext = "Read less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

			var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
</SCRIPT>
</html>