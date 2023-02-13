<?php

if(isset($_GET['info'])){
	$info = $_GET['info'];
}else{
	$info = "";	
}
?>

<!DOCTYPE html>
<html>
<title>MY PROJECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="res1.css">
<link rel="stylesheet" href="res2.css">
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <br><br><span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
</div>
<a class="w3-bar-item w3-button" href="addproduct.php">Add Product</a>
<a class="w3-bar-item w3-button" href="report.php">Report Product</a>
<a class="w3-bar-item w3-button" href="fback.php">Feedback</a>
</nav>

<header class="w3-top w3-bar w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item">NAFDAC RVS</h1>
</header>

<div class="w3-container" style="margin-top:90px; text-align:center;">
<br>
<br>
<br>
<img class="w3-circle" src="../nafdac.jpg" style="width:30%">
<br>
<br>
<?php echo $info; ?>
<br>

<form>
  <input type="text" name="search" placeholder="Search.." onkeyup="getCode(this.value);" style="font-family: 'Trebuchet MS', sans-serif;">
</form>
<br><br>
<div id="result"></div>
</div>

<footer class="w3-container w3-bottom w3-theme w3-margin-top" style="text-align:center;">
  <h5>Aminu L. B. &copy; <?php echo date("Y"); ?></h5>
</footer>

<script>
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}

function getCode(code) {
  if(code.length < 10){
	  document.getElementById("result").innerHTML = "CHECKING CODE...";
  }else{
   
   var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == XMLHttpRequest.DONE) {
			document.getElementById("result").innerHTML = xhr.responseText;
			
			
		}
	}
	xhr.open('GET', 'verifycode.php?code='+code, true);
	xhr.send(null);
	
  }
}
</script>

</body>
