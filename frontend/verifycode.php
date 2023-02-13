<?php 
include '../connect.php';
$code = $_GET ['code'];

$sql= mysqli_query($link, "SELECT * FROM products WHERE nafdacno='$code'");
$num = mysqli_num_rows($sql);
if($num == 1){
	while($rows= mysqli_fetch_assoc($sql)){ 
		?>
				<br><?php echo $rows['dname']; ?>
				<br><?php echo $rows['manufact']; ?>
				<br><?php echo $rows['distributor']; ?>
				<br><?php echo $rows['nafdacno']; ?>
				<br><?php echo $rows['status']; ?>	
			
		<?php 
	
	}
}else{	
	echo "RECORD NOT FOUND";
}

?>