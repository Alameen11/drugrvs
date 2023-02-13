<?php 
session_start();
include 'connect.php';

$username = $_POST ['uname'];
$password = $_POST ['pass'];

$sql= mysqli_query($link, "SELECT * FROM useraccount WHERE phone = '$username' AND password = '$password' ");
$numrows = mysqli_num_rows($sql);

if($numrows == 0){
	header("location:index.php?info=Invalid Logins");
}else{
	while($row = mysqli_fetch_assoc($sql)){
		$_SESSION['fullname'] = $row[name];
		$_SESSION['phone'] = $row[phone];
		$_SESSION['email'] = $row[username];
		$_SESSION['usrtype'] = $row[usrtype];
	}
	
	header("location:home.php");
	
}


?>