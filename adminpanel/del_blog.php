<?php
include 'dbConfig.php';
$id=$_REQUEST["id"];
$query = "delete from blog where id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
echo '<script language="javascript">';
echo 'location.href="view_blogs.php";';
echo 'alert("Record Deleted");';
echo '</script>';
?>
