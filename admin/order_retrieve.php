<?php
$db = mysqli_connect("localhost", "root", "", "shop_order");
$sql="SELECT * FROM `order1` order by order_id asc";
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
<br><br><br><br><br><br><br>
<table   >

		<tr>
		     <th>order_ID</th>
             <th>User_Name</th>      
             <th>package_id</th>      
             <th>quantity</th>      
             <th>product name</th>      
             <th>order_date</th>      
             <th>order_time</th>          
		</tr>
		
		
<?php
while($order1=mysqli_fetch_assoc($result)){
	echo "<tr>";
	  echo "<td>".$order1['order_id']."</td>";
	  echo "<td>".$order1['username']."</td>";
	  echo "<td>".$order1['package_id']."</td>";
	  echo "<td>".$order1['quantity']."</td>";
	  echo "<td>".$order1['product_name']."</td>";
	  echo "<td>".$order1['order_date']."</td>";
	  echo "<td>".$order1['order_time']."</td>";
	
	 
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
		$order_id = $_POST['order_id'];
        $flag=true;
		if($flag==true){
			$db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "delete from order1 where order_id='$order_id'";
			mysqli_query($db,$sql);
			header("location: order_retrieve.php"); 
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
			<td>order_id:</td>
			<td><input type="text" name="order_id" ></td>
		</tr>
	
			
			<center><td><input type="submit" name="add_btn" value="remove product"></td></center>
	
	</table>
</form>

</center>
</body>
</html> 

