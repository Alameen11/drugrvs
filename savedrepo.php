<?php 
include 'connect.php';


$name = $_POST ['dname'];
$manufacturer = $_POST ['manuf'];
$distributor = $_POST ['loct'];
$datex = date();
$unicode = time() * 2;


$sql= mysqli_query($drugsDB, "INSERT INTO `clients` (`id`, `name`, `manufact`, `distributor`, `datex`, `unicode`) VALUES (NULL, '$name', '$manufacturer', '$distributor', '$datex', '$unicode')");

if ($sql){
	echo "Registration complete";
}else {
	echo "Unable to register";
}


?>