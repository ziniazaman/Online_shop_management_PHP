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
				<table>
				<tr>
					<td><a href="home_user.php"><h1>Home</h1></a> </td><td></td>
					<td><a href="user_package.php"><h1>Clothing Gallery</h1></a> </td><td></td>
                    <td><a  href="logout.php"><h1>Logout</h1></a></td><td></td>					
	        </tr>  
			</table> 
			</div>
			
			</br>
			<div align="center" class="slider">
	<?php 
		$package_id=$_GET['package_id'];
		$package_name=$_GET['package_name'];
		include ('db.php');
		
		//echo $product_name;
	?>
	
	

		<div >
			<!-- Modal content-->
			<div >	
				<?php
				$query0=mysqli_query($db,"SELECT package_name FROM package where package_id='".$package_id."'");
				while($row=mysqli_fetch_array($query0))
				{
				?>
				<div >
						
					<h4  style="padding: 10px 0 0px 33px; text-transform: capitalize;font-size: 30px;"><?php echo $row['package_name'];?></h4>
				</div>
				<?php
				}
				?>
				
				
				<div style="padding: 0 50px;">
					
				
					<?php
					 $query2=mysqli_query($db,"SELECT package_price FROM package where package_id='".$package_id."'");
					while($row=mysqli_fetch_array($query2))
					{
					 ?>
						<h4 style="display: block; font-size: 20px; font-weight: normal;margin-bottom: 11px;margin-top: 26px">Price: </h4>
							<h4 style="border: 2px solid #111; border-radius: 4px; height:42px; padding-left:10px; width: 108px;padding-top:8px;"><?php echo $row['package_price'];?></h4>
					<?php
					}
					?>
					
					
					<br>
					<?php
						
						if($package_id==$package_id)
						{	
						?>
						<p>
						<a  href="order.php?package_id=<?php echo $package_id;?>&package_name=<?php echo $package_name;?>"  type="button" role="button">Order Now</a>
					    </p>
							
						<?php
						}
						?>
					
				</div>
			</div>
		</div>
		
			</div>
		</div>			
</body>
</html>

<?php
}
?>