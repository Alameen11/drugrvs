<?php 
include '../connect.php';
$dname = $_POST ['dname'];
$fback = $_POST ['fback'];
$name =  $_POST ['name'];
$fbackdate = time();


$sql= mysqli_query($link, "INSERT INTO `feedback` (`id`, `drugname`, `feedback`, `name`, `fbackdate`) VALUES (NULL, '$dname', '$fback', '$name', '$fbackdate')");

if($sql){
	header("location:index.php?info=SAVED SUCCESSFULLY");
}else{	
	header("location:addfback.php?info=UNABLE TO SAVE");
}

?>