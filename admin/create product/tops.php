<?php 
	session_start();
	$message="";
	if (isset($_POST['add_btn'])) {
		$package_name = $_POST['to_name'];
		$package_price = $_POST['to_price'];
		$img = $_POST['to_pic'];
        $flag=true;
	
		
		if(empty($package_name)){
			    $flag=false;
			$message.="<br/>"."tops name is  empty";
			
		}
		
		
		
		if(empty($package_price)){
			$flag=false;
			$message.="<br/>"." tops price is  empty";
		}
		
		
		
		if(empty($img)){
			$flag=false;
			$message.="<br/>"." tops photo is  empty";
		}
		
		
	
		
			if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "INSERT INTO package VALUES(null,'$package_name', '$package_price','$img')";
			mysqli_query($db,$sql);
			header("location: tops.php"); 
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
			<td>Tops_name:</td>
			<td><input type="text" name="to_name" ></td>
		</tr>
		<tr>
			<td>Tops_price</td>
			<br>
			<td><input type="text" name="to_price" ></td>
		</tr>
		 <tr>
			<td>Tops_pic</td>
			<br>
			<td><input type="file" name="to_pic" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="insert"></td>
		</tr>
	</table>
</form>

</body>
</html> 