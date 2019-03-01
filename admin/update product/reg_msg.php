
<?php 
//admin
	session_start();
?>


<html>

<body>

<?php
	if (isset($_SESSION['message'])){
		echo "<div >".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>


<h1>Home</h1>
<!--<div><h4>Registration Successful! </br> <?php //echo $_SESSION['username'];?></h4></div>-->
<div><a href="logout.php">Logout</a></div>
</body>
</html>
