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
		
		<meta name='copyright' content='IIAL Courses'>
 	   <meta name="keywords" content="Cosmetology-Course-in-Pune,Cosmetology-Course,Cosmetology-Course,fees,Certificate-in-Cosmetology-Course">
 	   <meta name="description" content="Cosmetology Course in Pune | Cosmetology Courses |Cosmetology Courses-fees| Certificate in Cosmetology Course">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>welcome to COSMETOLOGY Courses</title>
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
		
		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
								<div class="slider-text text-right">
									<h1>BEAUTY IS AN <span>ART</span>, AND WE HELP YOU LEARN IT</h1>
								
									<div class="button">
										<a href="registration.php" class="btn primary"><i class="fa fa-pencil"></i>Apply Now</a>
                                 
										<a href="about.php" class="btn">About IIAL</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider/slider1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text text-center">
									<h1>BECOME A CERTIFIED <span>AESTHETIC</span> PRACTITIONER BY LEARNING FROM THE EXPERTS.</h1>
									
									<div class="button">
										<a href="registration.php" class="btn primary"><i class="fa fa-pencil"></i>Apply Now</a>
										<a href="about.php" class="btn">About IIAL</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider/slider5.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text ">
									<h1><span>AMPLE</span> AMOUNT OF HANDS ON PRACTISE.</h1>
									
									<div class="button">
											<a href="registration.php" class="btn primary"><i class="fa fa-pencil"></i>Apply Now</a>
										<a href="about.php" class="btn">About IIAL</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		
		<!--/ End Slider Area -->
		
		<!-- Features -->
	
		<!-- End Features -->


	<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="section-title">
							<h2>Clinical <span>Courses</span> We Offer</h2>
							<p>A variety of clinical cosmetology and aesthetic courses for beginners to help set their cosmetic practise.A good amount of hands on with advances Injectable courses gives you a perfect orientation on the subject. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
						
				<!-- Single Course -->
						<div class="single-course">
									         <?php
                  $query65 = "select id,c_name,msg,img from courses where id=1";
                  $result65 = mysqli_query($conn, $query65);
                  while ($row65 = mysqli_fetch_array($result65)) {
                    ?>
							<div class="course-head overlay">						
								
								<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row65['img']).'"  width="200" height="200" />'?>  	
								<a href="course_clinical_cosmetology.php" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course_clinical_cosmetology.php" style="font-size:17px;"><span>DIPLOMA</span>
							
										<?php echo $row65['c_name'];?>	 </a></h4>
									
								<div class="more"><?php echo $row65['msg'];?></div>
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
								<h4><a href="course_trichology.php" style="font-size:17px;"><span>DIPLOMA</span>
							
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
								<h4><a href="course_injectables_antiAging.php" style="font-size:17px;"><span>DIPLOMA</span>
							
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
								<h4><a href="course_micropigmentation.php" style="font-size:17px;"><span>DIPLOMA</span>
							
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
</div>
		</section>

		<!--/ End Courses -->
    
<!-- Fun Facts -->
		<div class="fun-facts overlay" >
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="number"><span class="">4</span></div>
							<p>Active Cources</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<!--<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
						<!-- Single Fact
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="number"><span class="">3</span>k+</div>
							<p>Active Students</p>
						</div>
						<!--/ End Single Fact
					</div> -->
					<div class="col-lg-6 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="number"><span class="">Coming Soon</span></div>
							<p>Video Cources</p>
						</div>
						<!--/ End Single Fact -->
					</div>
						<!--<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
					 Single Fact 
						<div class="single-fact">
							<i class="fa fa-trophy"></i>
							<div class="number"><span class="">15</span>+</div>
							<p>Awards Won</p>
						</div>
						<!--/ End Single Fact 
					</div>-->
				</div>
			</div>
		</div>
		<!--/ End Fun Facts -->


		
		<!-- Team -->
		<section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="section-title">
							<h2>Our Expert <span>Doctors</span></h2>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 wow fadeIn" data-wow-delay="0.8s" style=" margin: 0 auto;width: 100%;">
						<!-- Single Team -->
						<div class="single-team">
							<img src="images/team/men1.jpg" alt="#">
							<div class="team-hover">
								<h4 class="name">Dr. Suresh Sanghvi<span class="work">Cosmetic and Plastic Surgeon</span></h4>
								<p></p>
								
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-4 col-md-4 col-12 wow fadeIn" data-wow-delay="0.6s" style=" margin: 0 auto;width: 100%;">
						<!-- Single Team -->
						<div class="single-team">
							<img src="images/team/shraddha.jpg" alt="#">
							<div class="team-hover">
								<h4 class="name">Dr. Shraddha Samant<span class="work">Aesthetic Physician and Cosmetologist</span></h4>
								<p></p>
								
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
						<!--/ End Single Team 
                	<div class="col-lg-4 col-md-4 col-12 wow fadeIn" data-wow-delay="0.4s">
						<!-- Single Team 
						<div class="single-team">
							<img src="images/team/dr3.jpg" alt="#">
							<div class="team-hover">
								<h4 class="name">Debarati Ghosh<span class="work">Aesthetic and Non Injectable Treatments.</span></h4>
								<p></p>
								
							</div>
						</div>
						<!--/ End Single Team 
					</div>		<!--/ End Single Team -->
                <!-- Single Team 
					<div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-delay="1s">
						
						<div class="single-team">
							
							
						</div>
						<!--/ End Single Team
					</div> -->
				</div>
			</div>
		</section>
		<!--/ End Team -->
		
		<!-- Testimonials -->
		<section class="testimonials overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="testimonial-slider">
							<!-- Single Testimonial -->					
            				 <?php
                              $query1 = "select name,msg from testimonial order by id desc;";
                              $result1 = mysqli_query($conn, $query1);
                              while ($row1 = mysqli_fetch_array($result1)) {
                                ?>
							<div class="single-testimonial">
								<img src="images/profile.png" alt="#">
								<div class="main-content">
									<h4 class="name"><?php  echo $row1['name'] ?></h4>
									<p><?php  echo $row1['msg'] ?></p>
								</div>
							</div>
								<?php 
									}
									?>
							<!--/ End Single Testimonial -->					
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		
		

		
				<!-- Blogs -->
		<section class="blog section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Our <span>Blogs</span></h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-slider">
					
							<!-- Single Blog -->
								
									 <?php
                              $query1 = "select id,b_name,date,subject,image from blog order by id desc;";
                              $result11 = mysqli_query($conn, $query1);
                              while ($row11 = mysqli_fetch_array($result11)) {
                                ?>
										<div class="single-blog">
								<div class="blog-head overlay">
								
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row11['image']).'" style="height: 250px !important;" />'?>  	
							
								</div>
								<div class="blog-content">
									<h4 class="blog-title"><a href="blogs.php"><?php  echo $row11['b_name']?></a></h4>
									<div class="blog-info">
									
										<a href="blogs.php"><i class="fa fa-list"></i><?php  echo $row11['subject']?></a>
										<a href="#"><i class="fa fa-calendar"></i><?php  echo $row11['date']?></a>
										
									</div>
									
									<div class="button">
										<a href="blogs.php" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div></div>
																					<?php 
		}
	?>
						
	
							<!-- End Single Blog -->
							
						</div>
					</div>
				</div>
			</div>
	


		</section>
	
		<!--/ End Blogs -->
		<!-- Footer -->
		
		<?php  include "footer.php" ?>

		<!--/ End Footer -->
		<script src="js/rocket-loader.min.js" data-cf-settings="273c7b0ae6366e0378be8e3f-|49" defer=""></script>
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
		<script src="js/particle-app.js"></script>	
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
     		<!-- Scroll Up JS-->
       
		<!-- Google Maps JS -->
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
        			<SCRIPT type="273c7b0ae6366e0378be8e3f-text/javascript">
$(document).ready(function() {
	var showChar = 70;
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