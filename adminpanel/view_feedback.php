<?php
include('session.php');
?>
<?php
include 'dbConfig.php';
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
  <link href="css/table-responsive.css" rel="stylesheet">
  <script> 
     function delete_data_main(id)
{
 if(confirm('Sure To Remove This Record ?'))
 {
  window.location.href='del_feedback.php?id='+id;
 }
}
</script>              
           
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
            <a class="active" href="view_feedback.php">
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
    <section id="main-content">
      <section class="wrapper">
        <h3>Feedback List</h3>
      
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4>Feedbacks</h4>
              <section id="no-more-tables">
                <table class="table table-bordered table-striped table-condensed cf">
                  <thead class="cf">
                    <tr>
                     <th><i class="fa fa-bullhorn"></i> ID</th>
                    <th><i class="fa fa-bookmark"></i> Name</th>
                      <th><i class="fa fa-bookmark"></i> Email</th>
                    <th><i class="fa fa-bookmark"></i> About Website</th>
                     <th><i class="fa fa-bookmark"></i> Satisfied</th>
                     <th><i class="fa fa-bookmark"></i> Suggest</th>
                    <th><i class=" fa fa-edit"></i> Action</th>           
                  </tr>

                  </thead>

                
                  <tbody>
                     
     <?php
                              $query1 = "select * from feedback";
                              $result11 = mysqli_query($conn, $query1);
                              $count=1;
                              while ($row = mysqli_fetch_array($result11)) {
                                ?>                   		<tr>

                     	<td data-title="ID"><?php echo $count; ?></td>
                     	<td data-title="Name"><?php echo $row['1']; ?></td>
                     	<td data-title="Email"><?php echo $row['2']; ?></td>
                     	<td data-title="Website"><?php echo $row['3']; ?></td>
                     	<td data-title="Satisfied"><?php echo $row['4']; ?></td>
                     	<td data-title="Suggest"><?php echo $row['5']; ?></td>
                     	

	<td data-title="Action">
               

   <a href="javascript:delete_data_main(<?php echo $row['0']; ?>)"> <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>

			</td>
		</tr>
	<?php 
	$count=$count + 1;	}
	?>                </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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

