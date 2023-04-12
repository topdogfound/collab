<?php
$server = "sql307.epizy.com";
$username = "epiz_33997484";
$password = " X7bx1yacBgMQxV ";
$dbname = "epiz_33997484_topdogfound";
$conn = mysql_connect($server, $username, $password, $dbname);
if(!$conn){
  die("Connection Failed".mysqli_connect_error()); 
}
include "header1.php";
include "body.php";
include "footer.php";
