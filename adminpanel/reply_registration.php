<?php
include('session.php');
include 'dbConfig.php';
?>
<?php

if(isset($_POST['add'])) {
    
$to=$_POST['mail'];
$subject=$_POST['sub'];
$message =$_POST['mess'];

    $header = "From:info@iialcourses.com \r\n";
    $header .= "Reply-To:iialcourses@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header,'-finfo@iialcourses.com');
    
        if( $retval == true )
        {
        echo '<script language="javascript">';
        echo 'alert("mail sent sucessfully");';
        echo '</script>';
         } 
     
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>IIAL -Learning made easy</title>

  <!-- Favicons -->
  <link href="img/" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>

    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
<section id="container">
	    <!--header start-->
      <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="home.php" class="logo"><b>INTERNATIONAL INSTITUTE OF AESTHETICS AND LASER.<span> (IIAL)</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
          	<form action="logout.php">
          		<input type="submit" class="btn btn-large btn-primary" style="margin-top:10px;" value="logout">
          	</form>
          	</li>
        </ul>
      </div>
    </header>
     <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="home.php"><img src="img/female.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Dr.Shraddha Samant.</h5>
          <li class="mt">
            <a  href="home.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
    
          <li>
            <a   class="active"  href="view_registration.php">
              <i class="fa fa-book"></i>
              <span>Registration</span>
              </a>
          </li>
              <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Courses</span> <i class="fa fa-angle-down"></i>
              </a>
            <ul class="sub" >
              <li><a href="view_courses.php">1. All Courses</a></li>
              <li><a href="view_course_single.php">2. Course Details</a></li>
               <li><a href="view_timetable.php">3. Courses Timetable</a></li>
               <li><a href="view_courses_img.php">4. Courses Image</a></li>
               
            </ul>
          </li>
              <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Syllabus</span> <i class="fa fa-angle-down"></i>
              </a>
            <ul class="sub" >
              <li><a href="view_syllabus_clinical.php">1.Clinical Course</a></li>
              <li><a href="view_syllabus_injectables.php">2. Injectables Course</a></li>
               <li><a href="view_syllabus_micropigmentation.php">3. Micropigmentation Course</a></li>
               <li><a href="view_syllabus_trichology.php">4. Trichology Course</a></li>
               
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-picture-o"></i>
              <span>Gallery</span> <i class="fa fa-angle-down"></i>
              </a>
            <ul class="sub" >
              <li><a href="view_gallery_image.php">1. Gallery Images</a></li>
              <li><a href="add_gallery_image.php">2. Add Image</a></li>          
            </ul>
          </li>
       
          <li>
            <a href="view_feedback.php">
              <i class="fa fa-comments"></i>
              <span>feedback</span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
           <li class="sub-menu">
            <a  href="javascript:;">
               <i class="fa fa-th"></i>
              <span>Blogs</span> <i class="fa fa-angle-down"></i>
              </a>
            <ul class="sub" >
              <li><a href="view_blogs.php">1. All Blogs</a></li>
              <li><a href="add_blog.php">2. Add Blog</a></li>
               <li><a href="view_blog_comment.php">3. Blog Comments</a></li>
         
            </ul>
          </li>
          <li>
            <a href="view_contactus.php">
              <i class="fa fa-envelope"></i>
              <span>Contact Us</span>
			 </a>
          </li>   
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Testimonial</span> <i class="fa fa-angle-down"></i>
              </a>
            <ul class="sub" >
              <li><a href="view_testimonial.php">1. All Testimonial</a></li>
              <li><a href="add_testimonial.php">2. Add Testimonial</a></li>
            </ul>
          </li>
          <li>
            <a href="view_faqs.php">
              <i class="fa fa-question-circle"></i>
              <span>F&amp;Q's</span>
              </a>
          </li>   
           <li>
            <a href="change_pass.php">
              <i class="fa fa-cogs"></i>
              <span>Change Password</span>
              </a>
          </li>       
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Reply</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <p></p>
          </div>
          
  	<div class="col-lg-6 col-md-6 col-sm-6">

	
          
        
            <div id="message"></div>
            <form class="contact-form" role="form" action="" method="POST">

              <div class="form-group">
              <label>To</label>
               <?php
               $id = $_REQUEST['id'];
                              $query1 = "select * from registration where r_id='$id'";
                              $result11 = mysqli_query($conn, $query1);
                              while ($row = mysqli_fetch_array($result11)) {
                                
                                ?>
                <input type="text" name="mail" value='<?php  echo $row['2']; ?>' class="form-control" placeholder="Your Email" >
                <?php }?>
                <div class="validate"></div>
              </div>
              <div class="form-group">
              <label>Subject</label>
                <input type="text" name="sub"  class="form-control"  placeholder="Subject" >
                <div class="validate"></div>
              </div>
               <div class="form-group">
              <label>Message</label>
                  <textarea class="form-control" name="mess" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
               
      

              <div class="form-send">
                <button type="submit" name="add" class="btn btn-large btn-primary">Send</button>
            
              </div>

            </form>
          </div>

        </div>
      </section>
      <!-- /wrapper -->
    </section>

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy;<strong>IIAL</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Powered by <a href="https://pnminfotech.com/">P&amp;N Mutke Infotech</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
     	  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>

