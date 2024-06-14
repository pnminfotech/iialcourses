
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include 'dbConfig.php';
session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql = mysqli_query($conn,"select a_name from admin where a_name = '$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['a_name'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}

?>
