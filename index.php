<?php
$server = "";
$username = "";
$password = "";
$dbname = "";
$conn = mysql_connect($server, $username, $password, $dbname);
if(!$conn){
  die("Connection Failed".mysqli_connect_error()); 
}
include "header1.php";
include "body.php";
include "footer.php";
