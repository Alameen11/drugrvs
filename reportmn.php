<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['phone']) || $_SESSION['phone'] == ""){
	header("location:index.php?info=YOU NEED TO LOGIN FIRST");
}

?>

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Drug Registration</title>
		<style>
			body {
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
			table {
				  border-collapse: collapse;
				  border-spacing: 0;
				  width: 100%;
				  border: 1px solid #ddd;
				}

				th, td {
				  text-align: left;
				  padding: 16px;
				}

				tr:nth-child(even) {
				  background-color: #f2f2f2;
				}
			
			/* CSS */
			.button-25 {
			  background-color: #36A9AE;
			  background-image: linear-gradient(#37ADB2, #329CA0);
			  border: 1px solid #2A8387;
			  border-radius: 2px;
			  box-shadow: rgba(0, 0, 0, 0.12) 0 1px 1px;
			  color: #FFFFFF;
			  cursor: pointer;
			  display: block;
			  font-family: -apple-system,".SFNSDisplay-Regular","Helvetica Neue",Helvetica,Arial,sans-serif;
			  font-size: 12px;
			  line-height: 100%;
			  margin: 0;
			  outline: 0;
			  padding: 5px 7px 8px 8px;
			  text-align: center;
			  transition: box-shadow .05s ease-in-out,opacity .05s ease-in-out;
			  user-select: none;
			  -webkit-user-select: none;
			  touch-action: manipulation;
			  width: 80%;
			}

			.button-25:hover {
			  box-shadow: rgba(255, 255, 255, 0.3) 0 0 2px inset, rgba(0, 0, 0, 0.4) 0 1px 2px;
			  text-decoration: none;
			  transition-duration: .15s, .15s;
			}

			.button-25:active {
			  box-shadow: rgba(0, 0, 0, 0.15) 0 2px 4px inset, rgba(0, 0, 0, 0.4) 0 1px 1px;
			}

			.button-25:disabled {
			  cursor: not-allowed;
			  opacity: .6;
			}

			.button-25:disabled:active {
			  pointer-events: none;
			}

			.button-25:disabled:hover {
			  box-shadow: none;
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
				border-radius: 3px;
				}
			li {
				float: right;
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
				text-align: left;	
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
				padding: 16px 16px;
				border: none;
				cursor: pointer;
				width: 50%;
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
				<li style="float: left;"><a href="home.php">HOME</a></li>
				<li style="float: left;"><a href="reportmn.php">REPORT MENU</a></li>
				<li style="float: left;"><a href="feedbackm.php">FEEDBACK MENU</a></li>
				<li><a href="logout.php">WELCOME <?php echo $_SESSION['fullname']; ?> - LOGOUT</a></li>
			</ul>
			<h2 style="font-family: 'Trebuchet MS', sans-serif;">REPORT MENU</h2>
			<table style="text-align: left; padding: 3px; font-family: 'Trebuchet MS', sans-serif;">
				<tr style="background-color: #C8f232;">
					<th>#</th>
					<th>DRUG NAME</th>
					<th>REPORT BY</th>
					<th>REPORT</th>
					<th>REPORT DATE</th>
					<th>STATUS</th>
					<th>MANUFACTURER</th>
				</tr>
				<?php
				
				$cn = 1;
				$sql = mysqli_query($link, "SELECT * FROM cases ORDER BY name ASC");
				while($rows= mysqli_fetch_assoc($sql)){ ?>
				<tr>
					<th><?php echo $cn; ?></th>
					<th><?php echo $rows['dname']; ?></th>
					<th><?php echo $rows['name']; ?></th>
					<th><?php echo $rows['report']; ?></th>
					<th><?php echo date("d.m.Y h:i A", $rows['rdate']); ?></th>
					<th><?php echo $rows['status']; ?></th>
					<th><?php echo $rows['manufact']; ?></th>
				</tr>
				<?php 
					$cn = $cn + 1;
					} 
				?>
			</table>
		</div>	
	</body>
</html>