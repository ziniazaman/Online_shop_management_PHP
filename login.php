<?php 
	session_start();
	
	$db = mysqli_connect("localhost", "root", "", "shop_order");
	if (isset($_POST['login_btn'])) 
{
		$username = $_POST['username'];
		$password =$_POST['password'];
	
		$sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) 
	{
			while($row=mysqli_fetch_assoc($result))
		{
			//$dbusername=$row['username'];
			//$dbpassword=$row['password'];
			$dbtype=$row['type'];
		
				if($username && $password )
				{ 
					session_start();
					$_SESSION['sess_user']=$username;
					
					if ($dbtype==1)
					{
						header("Location: admin/home_admin.php");
					}
					else
					{
						header("Location: user/home_user.php");
					}
			
						
			    }
				else{
					echo "doesn't match";
				}
		}
		
	}
			//$_SESSION['message'] = "You are now logged in";
			//$_SESSION['username'] = $username;
			//header("location: reg_msg.php"); 
	
		else{
			echo "Username/password combination incorrect";
		}
		
	
}
	
?>
<html>
    <head>
     <title>Login form</title>
	</head>
	  <style type='text/css'>
	  body{
		  
		  background:url('a.png');background-repeat:no-repeat;background-size:100% 100%;
	  }
	  </style>
<body>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div >".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<form method="post" >

	    <table width='400' border='5' align='center'>
	      <tr>
		    <td colspan='5' align='center'><h1>Login Form</h1></td>
		  </tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" ></td>
		</tr>

		<tr>
			
			 <td colspan='5' align='center'> <input type='submit' name='login_btn' value='Login' /> </td>
			
		  </tr>
	    </table>
    </form>
	<center>
				 <font color='red' size='6'>Not registered yet?</font><a href='register.php'>Signup Here</a></font>
				 </center>

</body>
</html>