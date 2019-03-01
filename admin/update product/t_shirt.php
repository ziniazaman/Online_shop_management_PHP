<?php 
	session_start();
	$message="";
	
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['t_name'];
		$package_price = $_POST['t_price'];
		$img= $_POST['t_pic'];
		$package_id = $_POST['t_id'];
        $flag=true;
	
		

		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "UPDATE package set package_name='$package_name', package_price='$package_price',img='$img' where package_id='$package_id'";
			mysqli_query($db,$sql);
			header("location: t_shirt.php"); 
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
			<td>T_shirt_id:</td>
			<td><input type="text" name="t_id" ></td>
		</tr>
		<tr>
			<td>T_shirt_name:</td>
			<td><input type="text" name="t_name" ></td>
		</tr>
		<tr>
			<td>T_shirt_price</td>
			<br>
			<td><input type="text" name="t_price" ></td>
		</tr>
		 <tr>
			<td>T_shirt_pic</td>
			<br>
			<td><input type="file" name="t_pic"  ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="update"></td>
		</tr>
	</table>
</form>

</body>
</html> 