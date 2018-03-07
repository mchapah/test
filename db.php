<?php
$host = "localhost";
$user = "marian";
$pwd  = "";
$db   = "marian";

$con = mysqli_connect($host,$user,$pwd) or die("Could not connect");
mysqli_select_db($con, $db) or die("No database");

?>