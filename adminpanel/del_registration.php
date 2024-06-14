<?php
include 'dbConfig.php';
$id=$_REQUEST["id"];
$query = "delete from registration where r_id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
echo '<script language="javascript">';
echo 'location.href="view_registration.php";';
echo 'alert("Record Deleted");';
echo '</script>';
?>
