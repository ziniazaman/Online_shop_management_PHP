<?php 
	session_start();
	$message="";
	
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['k_name'];
		$package_price = $_POST['k_price'];
		$img = $_POST['k_pic'];
		$package_id = $_POST['k_id'];
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
			<td>kurti_id:</td>
			<td><input type="text" name="k_id" ></td>
		</tr>
		<tr>
			<td>kurti_name:</td>
			<td><input type="text" name="k_name" ></td>
		</tr>
		<tr>
			<td>kurti_price</td>
			<br>
			<td><input type="text" name="k_price" ></td>
		</tr>
		 <tr>
			<td>kurti_pic</td>
			<br>
			<td><input type="file" name="k_pic"  ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="update"></td>
		</tr>
	</table>
</form>

</body>
</html> 