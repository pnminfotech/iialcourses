<?php
include 'dbConfig.php';
?>

<?php

if(isset($_POST['add'])) {

// create a variable
 
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$blog_id=$_POST['blog_id'];
mysqli_query($conn,"INSERT INTO blog_comment (name,email,comment,date_time,blog_id)
		        VALUES ('$name','$email','$comment',now(),'$blog_id')");

if(mysqli_affected_rows($conn) > 0){
    echo '<script language="javascript">';
    echo 'alert("Thank you for Comment");';
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
						<h2>Our Blogs</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="#">Blog Single</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
			
			<!-- Blog Single -->
		<section class="blog b-archives single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
					
	
									
										 <?php
                              $query1 = "select id,image,b_name,date,subject,blog_para1,blog_para2,blog_para3,blog_para4,main_part from blog order by id desc;";
                              $result11 = mysqli_query($conn, $query1);
                              while ($row11 = mysqli_fetch_array($result11)) {
                                ?>
							<div class="blog-detail">
							<div class="">
										<div class="single-image">
								
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row11['image']).'" width="200" height="200" />'?>  	

								</div>
							</div>
							<div class="detail-content">
								<div class="blog-info">
									<a href="#"><i class="fa fa-user"></i>By: Admin</a>
									<a href="#"><i class="fa fa-calendar"></i><?php  echo $row11['date'];?></a>
									<a href="#"><i class="fa fa-list"></i><?php  echo $row11['subject'];?></a>
								</div>
								<h2 class="blog-title"><a href="#"><?php  echo $row11['b_name'];?></a></h2>
									    <p><?php  echo $row11['blog_para1'];?></p>
						
								<p><?php  echo $row11['blog_para2'];?></p>
								<div class="blockquote">
									<p><?php  echo $row11['main_part'];?></p>
								</div>
									    <p><?php  echo $row11['blog_para3'];?></p>
								<p><?php  echo $row11['blog_para4'];?></p>					
							</div>
							
							<div class="blog-bottom">
								<ul class="share">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>						
									<li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
								<!-- Next Prev -->
								
								<!--/ End Next Prev -->
							</div>
						
						<div class="comment-main">
								<div class="comment-title">
									<h2>Leave a Reply</h2>
									<p>Your email address will not be published.</p>
								</div>
								<!-- Form -->
								<form class="form" action=" "  method="POST">
									<div class="row">
								
								
							
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<input name="name"  type="text" placeholder="Full name" required/>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<input name="email" type="email" placeholder="Enter your email" required/>
											</div>
										</div>
									
										<div class="col-12">
											<div class="form-group">
												<textarea name="comment" rows="6" placeholder="Comment Here" required/></textarea>
											</div>
										</div>
										<input type="hidden" name="blog_id" type="text" value="<?php  echo $row11['id'];?>">
	
										<div class="col-12">
											<div class="form-group">
												<div class="button">
													<button type="submit" name="add" class="btn primary">Post Comment</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
		
					<div class="col-lg-12 col-12">
							<div class="learnedu-sidebar">
							
																					
							<div class="single-widget course">
								<h3><span>Comment</span></h3>
								<!-- Single Course -->
								<div class="single-course">
							
									<div class="course-content">	
									
							<?php
							$id=$row11['id'];
                              $query = "select name,comment,date_time from blog_comment where blog_id='$id' order by date_time desc;";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                ?>
											
										<img src="images/man.png" alt="#">
										<div class="meta"><?php  echo $row['name'];?><span><i class="fa fa-clock-o"></i><?php  echo $row['date_time'];?></span></div>
										<P><?php  echo $row['comment'];?> </P><BR><BR>	
										<?php
		}
		?>
									</div>				
		
							</div>
		
			
								</div>
								<!-- Single Course -->
	
							</div>
		
						</div>
					</div>
	
	

							<?php 
		}
	 ?>
					</div>


	
			
				</div>
			</div>
	
		</section>
		<!--/ End Blog Single -->

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
</html>