<?php 
include '../connect.php';
$name = $_POST ['name'];
$dname = $_POST ['dname'];
$manufact = $_POST ['manufact'];
$distrib = $_POST ['distrib'];
$pnum = $_POST ['pnum'];
$datex = time();
$nafno = $datex * 2;

$sql= mysqli_query($link, "INSERT INTO `products` (`id`, `name`, `dname`, `manufact`, `distributor`, `datex`, `nafdacno`, `phone`, `status`, `nextasses`) VALUES (NULL, '$name', '$dname', '$manufact', '$distrib', '$datex', '$nafno', '$pnum', 'PROCESSING', '-');");

if($sql){
	header("location:index.php?info=SAVED SUCCESSFULLY");
}else{	
	header("location:addproduct.php?info=UNABLE TO SAVE");
}

?>