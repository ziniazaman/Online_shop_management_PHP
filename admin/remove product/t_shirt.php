<?php 
	session_start();
	$message="";
	if (isset($_POST['add_btn'])) {
		$package_id = $_POST['t_id'];
        $flag=true;
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "delete from package where package_id='$package_id'";
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
			<td></td>
			<td><input type="submit" name="add_btn" value="delete"></td>
		</tr>
	</table>
</form>

</body>
</html> 