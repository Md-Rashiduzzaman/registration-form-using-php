<?php 
include 'config.php';


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet" href="reg.css"></link>
	<meta charset="UTF-8">
	<title>Home</title>
	<h2 class="h" align="center">Welcome to Home Page</h2>
</head>
<body id="b">
<div id="d">

<form action="home.php" method="POST" align="center">

<center><img src="1.jpg" class="img2"></img></center>
<br><br><br><br><br>
<b>
<input type="submit" name="logout" id="btn" value="Log Out"></input>

</form>	
	
<?php 

	if(isset($_POST['logout'])){  //logout er if condition
		echo"
			<script> 
			alert('You are Successfully Logged Out');
			window.location.href='login.php';
			</script>
			";
	}else{  //logout er else condition
		
	}





?>	
	
</div>

</body>
</html>