<?php
session_start();
//echo $_SESSION['sess_user'];
if(!isset($_SESSION['sess_user']))
{
	header("location:../login.php");
}
else{
	
	include ('db.php');
	$username=$_SESSION['sess_user'];
?>
<html>
<head>
    <title>       
    </title>
	
</head>
	
<body>

<div class="main">
		<div class="header">
			<img width ="1350" height="150"src="images/shop.jpg"/>
		</div>
		<div >
			<div class="main-menu">
				<tr>
					<td><a href="home_user.php"><h1>Home</h1></a> </td><td></td>
					<td><a href="user_package.php"><h1>Clothing Gallery</h1></a> </td><td></td>
                    <td><a  href="logout.php"><h1>Logout</h1></a></td><td></td>					
	            </tr>  
			</div> 
			</br>
			<div align="center" class="slider">
						<h2> Order cloths</h2>	
						<form action="" method="POST"  onsubmit="return quantityChack()">
						<table>
							<tr>
							    <td><label>Quantity:</label></td>
								<td><input id="qChack" type="number" name="quantity" min="1" max="500" /></td>
								<td></td>
								
								<td><input type="submit" name="submit" value="Order"/></td>
							</table>
						</form>
            				
					<?php 
					
						
						$package_id=$_GET['package_id'];
						$package_name=$_GET['package_name'];
						
						
						$query=mysqli_query($db,"SELECT * FROM package where package_id='".$package_id."'");
						
					
							while($row=mysqli_fetch_array($query))
							{
					?>
			
							<table >
										<tr>
										<td>
										   <img style="height:316px; width:900px; border-radius:4px;" src="../uploads/<?php echo $row['img'];?>"</img>
										</td>
										</tr>
										<tr>
							</table>
				<?php
						}
					?>
			</div>

			</div>			
					
	
</div>
</body>
</html>
	<?php
		if(isset($_POST['submit']))
		{ 
		
			
			$username = $_SESSION["sess_user"];
			$quantity = $_POST['quantity'];
			date_default_timezone_set('Asia/Dacca');
			$date = date('Y/m/d h:i:s a', time()); //with time
			$currentdate = date("Y-m-d",strtotime($date));
			$currenttime = date("H:i:s",strtotime($date)); //without date
					
			$sql="insert into order1 values(null,'$username','$package_id','$quantity','$package_name','$currentdate','$currenttime')";
			mysqli_query($db,$sql);
		}	
	?>
<?php
}
?>
