<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_drugs = "localhost";
$database_drugs = "drugs";
$username_drugs = "root";
$password_drugs = "";


$link = mysqli_connect($hostname_drugs, $username_drugs, $password_drugs, $database_drugs);
// check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

?>