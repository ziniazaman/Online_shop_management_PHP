<?php 
	session_start();
	$message="";
	
	if (isset($_POST['add_btn'])) {
		$package_id = $_POST['k_id'];
        $flag=true;
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "delete from package where package_id='$package_id'";
			mysqli_query($db,$sql);
			header("location: kurti.php"); 
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
			<td></td>
			<td><input type="submit" name="add_btn" value="remove"></td>
		</tr>
	</table>
</form>

</body>
</html> 