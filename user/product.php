<?php
session_start();
//echo $_SESSION['sess_user'];
if(!isset($_SESSION['sess_user']))
{
	header("location:../login.php");
}
else{
	
	include ('db.php');
	$user=$_SESSION['sess_user'];

	//echo "<br/>".$user."<br/>".$fname;
	//$query=mysql_query("SELECT * FROM registration where username='".$user."'" );
	
	
?>
<html>
	
<body>

<div class="main">
		<div class="header">
			<img width ="1350" height="150"src="images/shop.jpg"/>
		</div>
		<div class="main-menu">
			<ul>
					<li><a href="home_user.php"><h1>Home</h1></a> </td><td></td>
					<li><a href="user_package.php"><h1>Clothing Gallery</h1></a> </td><td></td>
					<li><a  href="logout.php"><h1>Logout</h1></a></td><td></td>
			</ul>
		</div>
		<div class="slider" align="center">
		<h1><u>Package List:</u></h1>
			
					<?php 
						
						$product_name=$_GET['product_name'];
						
						$query=mysqli_query($db,"SELECT * FROM package JOIN product ON package.package_id=product.package_id where product.product_name='".$product_name."'");		
							while($row=mysqli_fetch_array($query))
							{
					?>
					
							
							<table bordercolor="#111" border="1">
								<tr >
								<td>
								   <img style="width:900px; height:316px;" src="../uploads/<?php echo $row['img'];?>"></img>
								</td>
								</tr>
								<tr>
								 <td>
								 Name:<?php echo $row['package_name'];?></br>
							
								 Price:<a href=""><?php echo $row['package_price'];?>tk</a></br>
							     <a href="show_package.php?package_id=<?php echo $row['package_id'];?>&day_name=<?php echo $row['product_name'];?>">ORDER</a>
								 </td>
							</tr>							<br>
						</table>
					
					<?php
						}
					?>

</div>
</body>
</html>

<?php
}
?>
