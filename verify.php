<!DOCTYPE html>
<html>
	<head>
		<title>Drug Verification Form</title>
		<style>
				body {
				background-image: url("untitled.png");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 1600px 600px;
				background-position: bottom;
				}
			.icon {
				position: absolute;
				margin: -5px 105px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 20px;
				}			
			input[type=number] {
				width: 35%;
				margin:10px 10px;
				padding: 7px 10px;
				border: 1px solid #ccc;
				display: inline-block;
				box-sizing: border-box;
				background-color: transparent;
				}	
			.form {
				text-align: center;
				}
			img	{
				float: left;
				}
				ul {
				list-style-type: none;
				margin: 80px -10px;
				padding: 3px;
				overflow: hidden;
				font-family: 'Trebuchet MS', sans-serif;
				background-color: #04AA6D;
				border: 2px solid black;
				border-radius: 5px;
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
				color: black;
				}
			.form{
				position: absolute;
				top: 50px;
				bottom: 0;
				left: 0;
				right: 0;
				margin: auto;
				width: 600px;
				height: 300px;
				text-align: center;
				}
			.button{
				background-color: #04AA6D;
				color: white;
				padding: 10px 16px;
				border: none;
				cursor: pointer;
				width: 35%;
				}				
		</style>
	</head>

	<body>
		 <img src="nafdac.jpg"
			alt="nafdac" width="100" height="100">
		<div class="icon">
			<strong><p>NAFDAC</strong><br>National Agency for Food and Drug Administration and Control</p>
		</div>
			<br>
			<br>
				<ul>
				<li><a class="active" href="index.php">HOME</a></li>
				<li><a href="login.php">OFFICER LOGIN</a></li>
				<li><a href="verify.php">VERIFY DRUG</a></li>
				<li><a href="report.php">MAKE REPORT</a></li>
			</ul>
		<div id="container">
			<div class="form">	
			<h1 style="font-family: Arial, Helvetica, sans-serif;">DRUG VERIFICATION FORM</h1>
				<form method="post" action="savevform.php">
				<input type="number" id="nafdacid" placeholder="NAFDAC ID" name="nafdacid"><br/>
				<button type="submit" class="button">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>