<?php
include 'dbConfig.php';
$id=$_REQUEST["id"];
$query = "delete from gallery where id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
echo '<script language="javascript">';
echo 'location.href="view_gallery_image.php";';
echo 'alert("Record Deleted");';
echo '</script>';
?>
