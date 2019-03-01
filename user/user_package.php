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
					<td><a href="user_package.php"><h1>Clothing Gallery:</h1></a> </td><td></td>
					<td><a  href="logout.php"><h1>Logout</h1></a></td><td></td>
	        </tr>  
			</table> 
			</div>
			
		<div class="slider" align="center">
		<h1><u>Package List:</u></h1>
		
			
					<?php 
						include ('db.php');
						$query = mysqli_query( $db, "SELECT * FROM package order by package_id desc");
						
						while($row = mysqli_fetch_array($query))
						{		
					?>		
					<table >		
						    <tr >
							<td >
							   <img style="height:316px; width:900px; border-radius:4px;" src="../uploads/<?php echo $row['img'];?>"</img>
							</td>
							<tr>
					        <tr>
								 <td>
								 Name:<?php echo $row['package_name'];?></br>
							
								 Price:<a href=""><?php echo $row['package_price'];?>tk</a></br>
							     <a href="show_package.php?package_id=<?php echo $row['package_id'];?>&package_name=<?php echo $row['package_name'];?>">ORDER</a>
								 </td>
							</tr>
							<br>
						</table>
					
					<?php
						}
					?>	
		</div>

</div>				

</body>
</html>
<?php
}
?>

