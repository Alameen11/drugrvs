<?php

if(isset($_GET['info'])){
	$info = $_GET['info'];
}else{
	$info = "";
}

?>

<!DOCTYPE html>

<html>
	<head>
		<title>System Login</title>
		<style>
			body {
				background-size: 1600px 600px;
				background-position: bottom;
				}
			.icon {
				position: absolute;
				margin: -5px 105px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 20px;
				border-bottom-style: solid;
				width: 92.6%;
				}			
			input[type=text], input[type=password]{
				width: 15%;
				margin:10px 10px;
				padding: 7px 10px;
				border: 1px solid #ccc;
				display: inline-block;
				box-sizing: border-box;
				background-color: transparent;
				}
			img	{
				float: left;
				}
			ul {
				list-style-type: none;
				margin: 0px 0px;
				padding: 3px;
				overflow: hidden;
				font-family: 'Trebuchet MS', sans-serif;
				background-color: #04AA6D;
				border: 2px solid black;
				border-radius: 5px;
				position: fixed;
				width: 100%;
				}
			li {
				float: left;
				}
			li a {
				display: block;
				color: black;
				text-align: center;
				padding: 10px 10px;
				text-decoration: none;
				}
			li a:hover:not(.active) {
				background-color: white;
				}
			#container{
				text-align: center;
				}
			.button{
				background-color: #04AA6D;
				color: white;
				padding: 16px 16px;
				border: none;
				cursor: pointer;
				width: 15%;
				}
			.footer {
				position: fixed;
				width: 100%;
				bottom: 0%;
				background-color: #04AA6D;
				font-family: Arial, Helvetica, sans-serif;
				}
		</style>
	</head>

	<body>
		<img src="nafdac.jpg"
			alt="nafdac" width="100" height="100">
		<div class="icon">
			<strong><p>NAFDAC</strong><br>National Agency for Food and Drug Administration and Control</p>
			
		</div>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<div id="container">
			<div class="form">
			<form method="post" action="checklogin.php">
			<h1 style="font-family: Arial, Helvetica, sans-serif;">SYSTEM LOGIN</h1>
			<h4 style="font-family: Arial, Helvetica, sans-serif;"><?php echo $info; ?></h4><br/>
			<input type="text" id="username" placeholder="Phone Number" name="uname"><br/>
			<input type="password" placeholder="Password" name="pass"><br/>
			<button type="submit" class="button">Login</button>
			</form>
			</div>
		</div>
		<footer class="footer" style="text-align:center;">
		<h5>Aminu L. B. &copy; <?php echo date("Y"); ?></h5>
		</footer>
	</body>
</html>