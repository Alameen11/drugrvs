<?php 
include '../connect.php';
$name = $_POST ['name'];
$dname = $_POST ['dname'];
$report = $_POST ['report'];
$rdate = time();
$status = 0;
$manufact = $_POST ['manufact'];


$sql= mysqli_query($link, "INSERT INTO `cases` (`id`, `dname`, `name`, `report`, `rdate`, `status`, `manufact`) VALUES (NULL, '$dname', '$name', '$report', '$rdate', '$status', '$manufact')");

if($sql){
	header("location:index.php?info=SAVED SUCCESSFULLY");
}else{	
	header("location:addreport.php?info=UNABLE TO SAVE");
}

?>