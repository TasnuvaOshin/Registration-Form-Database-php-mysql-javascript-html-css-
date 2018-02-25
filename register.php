<?php
  include 'config.php';
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>WEB</title>
<h2 align="center" class="h">Welcome to WEB</h2>
</head>
<body id="b">
<center>
<div id="d">
<img src="reg.png" class="img"></img>
<center><form action="register.php" method="POST">
<b><label>Name</label>
<input name="name" type="text" id="form" placeholder="Enter your name" required>
</input>
<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input>
<b><label>Confirm Password</label>
<input name="cpass" type="password" id="form" placeholder="Confirm your Password" required>
</input>
<!button work>

<input name="signup" type="submit" id="button" value="SIGN-UP">
</input>
<a href="login.php"><input name="back" type="button" id="button" value="BACK TO SIGN-IN">
</input>


</form></center>

</center>
<?php
//coding 

if(isset($_POST['signup'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	
	
	
	if($pass==$cpass){
		
		$query= "select*from user where email='$email'";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			
			if(mysqli_num_rows($query_run) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
			}else{
				
	$insertion= "insert into user values('$name','$email','$pass')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='home.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='register.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='register.php';
		</script>
		";
			
		}
		
		
	}
	else{
		echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='register.php';
		</script>
		";
	}
	
	
}
else{
	
	
}






?>














</div>
</body>

</html>
