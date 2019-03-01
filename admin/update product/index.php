
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
<body>
<div class="main">
<center>
			<div>
				<img width ="1350" height="150"src="images/shop.jpg"/>
			</div>
		<div class="main-menu">
			
			<ul>
							
							<td><a href="#"><h1>Update product</h1></td>
								<ul class="dropdown-menu dropCust2" aria-labelledby="dLabel">
									<td><a class="a02" href="kurti.php"><h2>Kurti</h2></a></td>
									<td><a class="a02" href="shirt.php"><h2>Shirt</h2></a></td>
									<td><a class="a02" href="t_shirt.php"><h2>T-Shirt</h2></a></td>
									<td><a class="a02" href="tops.php"><h2>Tops</h2></a></td>
								</ul> 
								
			<table>
				<td> <a href="index.php"><h1>Home</h1></a> </td>
				
				<td> <a href="reg_msg.php"><h1>Log out</h1></a> </td>
		    </ul>			
	    </div>
			</table> 
			</div>
			<div >
				<img width="1350" height="430" src="images/product.jpg"/>
</center>
            </div>
</div>
</body>
</html>
<?php
}
?>