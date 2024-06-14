<?php
include('session.php');
?>
<?php
include 'dbConfig.php';
?>
<?php

if(isset($_POST['update'])) {
    include 'dbConfig.php';
    // create a variable
       
    $c_name=$_POST['c_name'];
     $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $start_time=$_POST['start_time'];
   $end_time=$_POST['end_time'];
    $duration=$_POST['duration'];
    
   $query= mysqli_query($conn,"update single_course set c_name='$c_name',start_date='$start_date',end_date='$end_date',start_time='$start_time',end_time='$end_time',duration='$duration'
        where id = '".$_POST["id"]."'");

    if(mysqli_affected_rows($conn) > 0){
        echo '<script language="javascript">';
        echo 'alert("Record Updated");';
        echo 'location.href="view_timetable.php";';
        echo '</script>';
    } else {
        echo " NOT Updated<br />";
        echo mysqli_error ($conn);
    
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
   <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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
            <a href="view_registration.php">
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
        <h3><i class="fa fa-angle-right"></i>Update Course Details</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <p></p>
          </div>
       <marquee loop=1 BEHAVIOR=SLIDE SCROLLAMOUNT=100 DIRECTION=left>        
  	<div class="col-lg-812 col-md-12 col-sm-12">

             <?php
               $id = $_REQUEST['id'];
                              $query1 = "select id,c_name,start_date,end_date,start_time,end_time,duration from single_course where id='$id'";
                              $result11 = mysqli_query($conn, $query1);
                              while ($row = mysqli_fetch_array($result11)) {
                                  ?>        
            <div id="message"></div>
            <div class="form-panel">
              <form action="" method="post" class="form-horizontal style-form">
                  <div class="form-group">
                  <div class="col-md-5 ">
                    <input class="form-control form-control-inline input-medium" size="25" type="hidden" name="id" value='<?php echo $row['0']; ?>'>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-1">Course Name</label>
                  <div class="col-md-5 ">
                    <input class="form-control form-control-inline input-medium" size="25" type="text" name="c_name" value='<?php echo $row['1']; ?>'>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label col-md-1">Course Start Date</label>
                  <div class="col-md-5 col-xs-10">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2021" class="input-append date dpYears">
                      <input type="text"  size="16" class="form-control" name="start_date" value='<?php echo $row['2']; ?>'>
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">select date</span>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label col-md-1">Course End Date</label>
                  <div class="col-md-5 col-xs-10">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2021" class="input-append date dpYears">
                      <input type="text"  size="16" class="form-control" name="end_date" value='<?php echo $row['3']; ?>'>
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">select date</span>
                  </div>
                </div>
                    <div class="form-group">
                  <label class="control-label col-md-1">Start Time</label>
                  <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" class="form-control timepicker-default" name="start_time" value='<?php echo $row['4']; ?>'>
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  </div>
                </div>
                   <div class="form-group">
                  <label class="control-label col-md-1">End Time</label>
                  <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" class="form-control timepicker-default" name="end_time" value='<?php echo $row['5']; ?>'>
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  </div>
                </div>
                
                       <div class="form-group">
                  <label class="control-label col-md-1">Course Duration</label>
                  <div class="col-md-5 ">
                    <input class="form-control form-control-inline input-medium" size="25" type="text" name="duration" value='<?php echo $row['6']; ?>'>
                  </div>
                </div>
                    
                
                   <div class="form-send ">
                <button type="submit" name="update" class="btn btn-large btn-primary">UPDATE</button>
            		</div>
              </form>
            </div>
            <?php } ?>
          </div>
</marquee>
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
   <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
    <script src="lib/php-mail-form/validate.js"></script>

</body>

</html>

