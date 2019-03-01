<?php 
	session_start();
	$message="";
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['s_name'];
		$package_price = $_POST['s_price'];
		$img = $_POST['s_pic'];
        $flag=true;
	
		
		if(empty($package_name)){
			    $flag=false;
			$message.="<br/>"."shirt name is  empty";
			
		}
		
		
		
		if(empty($package_price)){
			$flag=false;
			$message.="<br/>"." shirt price is  empty";
		}
		
		
		
		if(empty($img)){
			$flag=false;
			$message.="<br/>"." shirt photo is  empty";
		}
		
		
	
		
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "INSERT INTO package VALUES(null,'$package_name', '$package_price','$img')";
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
			<td>shirt_name:</td>
			<td><input type="text" name="s_name" ></td>
		</tr>
		<tr>
			<td>shirt_price</td>
			<br>
			<td><input type="text" name="s_price" ></td>
		</tr>
		 <tr>
			<td>shirt_pic</td>
			<br>
			<td><input type="file" name="s_pic" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="insert"></td>
		</tr>
	</table>
</form>

</body>
</html> 