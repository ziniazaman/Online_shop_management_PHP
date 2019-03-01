<?php 
	$nameErr=" ";
	session_start();
	$message="";
	if (isset($_POST['register_btn'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$flag=true;
		
		if(empty($username)){
			$message.="<br/>"."username empty";
			$flag=false;
		}
		elseif(str_word_count($username)>=2){ 
			if(!preg_match("/^[a-zA-Z ]*$/",$username)){
				$flag=false;
				$nameErr= "name contain only alphabat<br>";
			}
		}
		else{
			$flag=false;
			$nameErr="Name contain at least two word<br>";
		}
		
		if(empty($email)){
			$flag=false;
			$message.="<br/>"." email empty";
		}
		
		if(empty($password) || empty($password2)){
			$flag=false;
			$message.="<br/>"."password empty";			
		}
		else{
			if ($password != $password2){
				$flag=false;
				$message = "The two passwords do not match";
			}
		}
		
		if($flag==true){
			 $db = mysqli_connect("localhost", "root", "", "shop_order");
			$sql = "INSERT INTO registration VALUES(null,'$username','$password', '$email',0)";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			header("location: reg_msg.php"); 
		}
	}
?>

<html>
<body>

<?php
	if (isset($message)){
		echo "<div >".$message."</div>";
	}
?>
<form method="post" >
	<table>
		<tr>
			<td>Username:</td>
			<br>
			<td><input type="text" name="username" ><?php echo $nameErr;?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" ></td>
		</tr>
		<tr>
			<td>Password:</td>
			<br>
			<td><input type="password" name="password" ></td>
		</tr>
		 <tr>
			<td>Password again:</td>
			<br>
			<td><input type="password" name="password2" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register"></td>
		</tr>
	</table>
</form>

</body>
</html> 