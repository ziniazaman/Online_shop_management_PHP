
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
							
							<td><a href="#"><h1>Please Select The Orders Cloth</h1></a></td>
								<ul class="dropdown-menu dropCust2" aria-labelledby="dLabel">
									<td><a class="a02" href="product.php?product_name=kurti"><h2>Kurti</h2></a></td>
									<td><a class="a02" href="product.php?product_name=shirt"><h2>Shirt</h2></a></td>
									<td><a class="a02" href="product.php?product_name=t-shirt"><h2>T-Shirt</h2></a></td>
									<td><a class="a02" href="product.php?product_name=tops"><h2>Tops</h2></a></td>
								</ul> 
								
			<table>
				<td> <a href="home_user.php"><h1>Home</h1></a> </td>
				<td> <a href="user_profile.php"><h1>Profile</h1></a> </td>
				<td> <a href="logout.php"><h1>Log out</h1></a> </td>
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