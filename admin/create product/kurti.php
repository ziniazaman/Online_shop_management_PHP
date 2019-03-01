<?php 
	session_start();
	$message="";
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['k_name'];
		$package_price= $_POST['k_price'];
		$img = $_POST['k_pic'];
		
        $flag=true;
		
		if(empty($package_name)){
			    $flag=false;
			$message.="<br/>"."Kurti name is  empty";
			
		}
		
		if(empty($package_price)){
			$flag=false;
			$message.="<br/>"." Kurti price is  empty";
		}
		
		
		
		if(empty($img)){
			$flag=false;
			$message.="<br/>"." Kurti photo is  empty";
		}
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "INSERT INTO package VALUES(null,'$package_name', '$package_price','$img')";
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
			<td>kurti_Name:</td>
			<td><input type="text" name="k_name" ></td>
		</tr>
		<tr>
			<td>kurti_Price</td>
			<br>
			<td><input type="text" name="k_price" ></td>
		</tr>
		 <tr>
			<td>kurti_Pic</td>
			<br>
			<td><input type="file" name="k_pic"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="insert"></td>
		</tr>
	</table>
</form>

</body>
</html> 