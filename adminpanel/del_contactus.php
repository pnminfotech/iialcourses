<?php
include 'dbConfig.php';
$id=$_REQUEST["id"];
$query = "delete from contact_us where id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
echo '<script language="javascript">';
echo 'location.href="view_contactus.php";';
echo 'alert("Record Deleted");';
echo '</script>';
?>
