<?php 
	session_start();
	$message="";
	
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['to_name'];
		$package_price = $_POST['to_price'];
		$img = $_POST['to_pic'];
		$package_id = $_POST['to_id'];
        $flag=true;
	
		

		

		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "UPDATE package set package_name='$package_name', package_price='$package_price',img='$img' where package_id='$package_id'";
			mysqli_query($db,$sql);
			header("location: shirt.php"); 
		}
		}
		
?>

<html>
<body>

<?php
	if (isset($message)){
		echo "<div >".$message."</div>";
	}
?>
<form method="post" >
	<table>
	    <tr>
			<td>tops_id:</td>
			<td><input type="text" name="to_id" ></td>
		</tr>
		<tr>
			<td>tops_name:</td>
			<td><input type="text" name="to_name" ></td>
		</tr>
		<tr>
			<td>tops_price</td>
			<br>
			<td><input type="text" name="to_price" ></td>
		</tr>
		 <tr>
			<td>tops_pic</td>
			<br>
			<td><input type="file" name="to_pic"  ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="update"></td>
		</tr>
	</table>
</form>

</body>
</html> 