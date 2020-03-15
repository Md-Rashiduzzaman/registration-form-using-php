<?php 
include 'config.php';


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet" href="reg.css"></link>
	<meta charset="UTF-8">
	<title>Login</title>
	<h2 class="h" align="center">Welcome to Login Page</h2>
</head>
<body id="b">
<div id="d">

<form action="login.php" method="POST" style="text-align:center">

<center><img src="2.jpg" id="img1"></img></center>
<br>
<b>
<label>User Email</label>
<input type="email" name="email" id="form" placeholder="Enter your Email" required></input>
<br><b><br>
<label>User Password</label>
<input type="password" name="pass" id="form" placeholder="Enter your Password" required></input>
<br><br>
<input type="submit" name="login" id="btn" value="Log In"></input>
<br><br>
<a href="reg.php"><input type="button" name="reg" id="btn" value="Registration"></input>

</form>	
<?php 

if(isset($_POST['login'])){         //Log In click if check (isset)
	$mail = $_POST['email']; //email r password catch kora post method er maddhome
	$passw = $_POST['pass']; //user email r password dilo
	
	$quer = "select*from user where email='$mail' AND password='$passw'";
// email,password ta hosse database a j field a email r password ta ase se email password  
//user $mail variable er maddhome j email dia login korse se email ta database er email a 
//ase ki na seta match korbe ai vabe password o same vabe input r database a password same kina ta check korbe 	

	$che = mysqli_query($conn,$quer);  //query run koranor code
	
	if($che){ //query run koranor if condition
		
		if(mysqli_num_rows($che) > 0 ){ //database a email r password match korse kina maane
			echo"
			<script> 
			alert('You are Successfully Logged In');
			window.location.href='home.php';
			</script>
			";
	
	}else{ //email password check else
			echo"
			<script> 
			alert('Email or Password not Correct!');
			window.location.href='login.php';
			</script>
			";
		}
	}else{   //query run koranor else condition
		echo"
			<script> 
			alert('Database Error!');
			window.location.href='login.php';
			</script>
			";
	}
	
}else{  //Log In click else check (isset)
	
}




?>	
</div>

</body>
</html>