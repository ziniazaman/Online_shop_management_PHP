
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
					<td><a href="index.php"><h1>Home</h1></a> </td><td></td>
					<td><a href="package.php"><h1>Product</h1></a> </td><td></td>
					<td><a href="login.php"><h1>Login</h1></a></td><td></td>
					<td><a href="register.php"><h1>Sign Up</h1></a></td><td></td>
					<td><a href="contact.php"><h1>Contact Us</h1></a></td><td></td>							
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
						<table  >
							<tr align="center">
							   <td><img  style="height:316px; width:900px; border-radius:4px;" src="uploads/<?php echo $row['img'];?>"</img></td>
							</tr>
							<tr>
								 <td>
								 Name:<?php echo $row['package_name'];?></br>
								 Price:<a href=""><?php echo $row['package_price'];?>tk</a></br>
								 <a href="login.php">ORDER</a>
								 </td>
							</tr>
							<br>
						</table>
					
					<?php
						}
					?>	
   
</div>				

</body>
</html>


