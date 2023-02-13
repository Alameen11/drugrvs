<?php 
include 'connect.php';


$name = $_POST ['name'];
$manufacturer = $_POST ['manuf'];
$distributor = $_POST ['distrib'];
$datex = time();
$unicode = time() * 2;


$sql= mysqli_query($link, "INSERT INTO `clients` (`id`, `name`, `manufact`, `distributor`, `datex`, `unicode`) VALUES (NULL, '$name', '$manufacturer', '$distributor', '$datex', '$unicode')");

if ($sql){
	echo "REGISTRATION COMPLETE, YOUR NAFADAC NUMBER IS: " .$unicode;
}else {
	echo "Unable to register";
}


?>