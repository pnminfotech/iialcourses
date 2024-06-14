<?php
include 'dbConfig.php';
?>

<?php

if(isset($_POST['add'])) {

// create a variable
    
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$mesage=$_POST['mesage'];

    $date = date('Y-m-d H:i:s');
mysqli_query($conn,"INSERT INTO registration (name,email,phone,gender,course,mesage,date)
		        VALUES ('$name','$email','$phone','$gender','$course','$mesage','$date')");

if(mysqli_affected_rows($conn) > 0){
    $to = "iialcourses@gmail.com";
    $subject = "New Registration";
    $message = "Hello Mam,";
    $message .= 'You have new registration.<br>Please check Registration Details.<br>Thank You.';
    $header = "From:info@iialcourses.com \r\n";
    $header .= "Reply-To:".$email." \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header,'-finfo@iialcourses.com');
    
        if( $retval == true )
        {
        echo '<script language="javascript">';
        echo 'alert("Congratulations! You have Successfully Registered ");';
        echo '</script>';
         } 
     
}
else {
    echo mysqli_error($conn);
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
    <script type='text/javascript'>
function validate()
{
	var name = document.myform.gender.value;	
	if(name=="")
	{
		alert("Please Fill All the Details");
		return false;
	}
	x = document.forms["myform"]["phone"];

 if(!x.value.match(/^\d{10}$/))
	{
	 	alert("Invalid Mobile number.");
	 	x.focus();
	 	return false;
	 }

}

</script>
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
		<?php  include "header.php" ?>


	
		<!-- Enroll -->
		<section class="enroll overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row">
							<div class="col-lg-12 col-12 wow fadeInUp" data-wow-delay="0.4s">
								<!-- Single Enroll -->
								<div class="enroll-form">
									<div class="form-title">
										<h2>Enroll Today</h2>
										<p>Before you miss the chance to get your seat!</p>
									</div>
									<!-- Form -->
									<form class="form" action="#" method="post" name="myform" onsubmit="return validate()">
										<div class="form-group">
											<label>Enter Your name</label>
											<input  type="text" name="name" placeholder="Your Name" required/>
										</div>
										<div class="form-group">
											<label>Enter Your Email</label>
											<input type="email" name="email"  placeholder="Your Email" required/>
										</div>
										<div class="form-group">
											<label>Enter Your Phone</label>
											<input type="text" name="phone"  placeholder="Your Ph. NO" required/>
										</div>
										<div>
											<label style="font-size: 14px; font-weight: 500; margin-bottom: 5px;">Gender</label><br>

											<input type="radio" name="gender" value="Female" />Female<br>
											<input type="radio" name="gender" value="Male" />Male<br>
											<input type="radio" name="gender" value="Other" />Other
									</div><br>
									<div class="form-group">
									<label>Courses:</label><br>
									<select name="course" style="width: -webkit-fill-available;height: 40px;border-radius:10px;" required>
								 	<option>Please select Your Course</option>
								 		 <?php
                              $query1 = "select c_name from courses;";
                              $result11 = mysqli_query($conn, $query1);
                              while ($row11 = mysqli_fetch_array($result11)) {
                                ?>
								
							    		
							    		<option value="<?php echo $row11['c_name'];?>" ><?php echo $row11['c_name'];?></option>
							    			<?php 
												}
												?>
									</select>
									
									</div>
										<div class="form-group">
											<label>Type your messages</label>
											<textarea name="mesage" placeholder="i would like to talk..." required/></textarea>
										</div>
										<div class="form-group button">
											<button type="submit" name="add" class="btn">Register Now</button>
										</div>
									</form>
									<!--/ End Form -->
								</div>
								<!-- Single Enroll -->
							</div>
						
						</div>
					</div>
				</div>
			</div>
    </section>
		
			
		
		<!--/ End Enroll -->
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