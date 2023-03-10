<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

textarea#styled {
	width: 100%;
	height: 120px;
	border: 1px solid #cccccc;
	padding: 16px 20px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
}
</style>
</head>
<body>


<div id="myForm">
  <form action="addreport.php" class="form-container" method="POST">
    <h1>Report Product</h1>

	<label for="name"><b>Drug Name</b></label>
    <input type="text" placeholder="Enter Drug Name" name="dname" required>
	
	<label for="name"><b>Report</b></label>
    <textarea name="report" id="styled" onfocus="this.value=''; setbg('#f1f3f2');" onblur="setbg('white')">Enter your comment here...</textarea>
	<br><br>
	<label for="name"><b>Reporting Date</b></label>
    <input type="text" value="<?php echo date("d.m.Y h:i:s A"); ?>" name="rdate" readonly>
	
	<label for="number"><b>Manufacturer</b></label>
    <input type="text" placeholder="Manufacturer" name="manufact" required>
	
	
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>

	<button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>

function closeForm() {
  window.location.href = "index.php";
}
</script>

</body>
</html>
