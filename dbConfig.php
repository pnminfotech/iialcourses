<?php
//Database details
$db_host     = 'localhost';
//$db_username = 'root123';
$db_username = 'connect4_root';
//$db_password = 'Sameer123';
$db_password = 'Connect4_root';
$db_name     = 'connect4_shradha_cd017';

//Create connection and select DB
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if($conn->connect_error){
    die("Unable to connect database: " . $conn->connect_error);
}
//$YAB%&L83C]i

?>
