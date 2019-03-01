<?php
$db = mysqli_connect("localhost", "root", "", "shop_order");
$sql="SELECT * FROM package order by package_id asc";
$result=mysqli_query($db,$sql);
?>

<head>
<title>order Data</title>
<style>
table, th ,td{
    border: 1px solid black;
}
body{
	background-color: skyblue;
}

th{
	background-color:green;
}
td{
	background-color:white;
}
th{
	color:white;
}
</style>

</head>

<body >

<center>
<h1 style=color:blue>All products</h1> 
<br><br>
<table>

		<tr>
		     <th>package_id</th>
             <th>package_name</th>      
             <th>package_price</th>      
             <th>Image</th>      
                     
		</tr>
		
		
<?php
while($package=mysqli_fetch_assoc($result)){
	echo "<tr>";
	  echo "<td>".$package['package_id']."</td>";
	  echo "<td>".$package['package_name']."</td>";
	  echo "<td>".$package['package_price']."</td>";
	  echo "<td>".$package['img']."</td>";
	
	 
	echo "</tr>";
}
?>
</table>
</center>
</body>


<html>
<body><center>
<?php 
	session_start();
	$message="";
	
	if (isset($_POST['add_btn'])) {
		$package_id = $_POST['order_id'];
        $flag=true;
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "delete from package where package_id='$package_id'";
			mysqli_query($db,$sql);
			header("location: packageview.php"); 
		}
		}
		
?>



<?php
	if (isset($message)){
		echo "<div >".$message."</div>";
	}
?>
<form method="post" >
	<table>
	    <tr>
			<td>package_id:</td>
			<td><input type="text" name="order_id" ></td>
		</tr>
	
			
			<center><td><input type="submit" name="add_btn" value="remove product"></td></center>
	
	</table>
</form>

</center>
</body>
</html> 

<?php 
	
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
			header("location: packageview.php"); 
		}
		}
		
?>

<html>
<body><center>

<?php
	if (isset($message)){
		echo "<div >".$message."</div>";
	}
?>
<form method="post" >
	<table>
	    <tr>
			<td>package_id:</td>
			<td><input type="text" name="k_id" ></td>
		</tr>
		<tr>
			<td>package_name:</td>
			<td><input type="text" name="k_name" ></td>
		</tr>
		<tr>
			<td>package_price</td>
			<br>
			<td><input type="text" name="k_price" ></td>
		</tr>
		 <tr>
			<td>Image</td>
			<br>
			<td><input type="file" name="k_pic"  ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="update product"></td>
		</tr>
	</table>
</form>
</center>
</body>
</html> 

