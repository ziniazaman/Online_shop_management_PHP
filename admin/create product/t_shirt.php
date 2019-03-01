<?php 
	session_start();
	$message="";
	if (isset($_POST['add_btn'])) {
		$package_name= $_POST['t_name'];
		$package_price = $_POST['t_price'];
		$img = $_POST['t_pic'];
        $flag=true;
	
		
		if(empty($package_name)){
			    $flag=false;
			$message.="<br/>"."T_shirt name is  empty";
			
		}
		
		
		
		if(empty($package_price)){
			$flag=false;
			$message.="<br/>"." T_shirt price is  empty";
		}
		
		
		
		if(empty($img)){
			$flag=false;
			$message.="<br/>"." T_shirt photo is  empty";
		}
		
		
	
		
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "INSERT INTO package VALUES(null,'$package_name', '$package_price','$img')";
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
			<td><input type="file" name="t_pic" value="chose photo" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="insert"></td>
		</tr>
	</table>
</form>

</body>
</html> 