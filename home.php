<?php
 include 'config.php';
 
 
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>WEB</title>
<h2 align="center" class="h">Welcome to HOME</h2>
</head>
<body id="b">
<center>
<div id="d">
<img src="home.png" class="img"></img>
<center><form action="home.php" method="POST">


<!button work>

<input name="logout" type="submit" id="button" value="LOG-OUT">
</input>

</form></center>

</center>
<?php
  if(isset($_POST['logout'])){
	  
	  echo"
				<script>
				alert('You are Successfully  Logged out');
				window.location.href='login.php';
				</script>
				";
				
	  
	  
  }else{}





?>




</div>
</body>

</html>
