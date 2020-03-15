<?php 
include 'config.php';


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet" href="reg.css"></link>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<h2 class="h" align="center">Welcome to Registration Page</h2>
</head>
<body id="b">
<div id="d">
<!--align kaj kore text er upor but center kaj kore div/img etc er jonne -->
<!-- action means kon page er upor kaj/action korbe(reg.php te output ashbe)-->
<!--method hosse form theke user j data insert korbe ta database a nia jabe -->
<form action="reg.php" method="POST" style="text-align:center">
<!--get method a user insert data gulo url a show kore but post method ta hidden thake-->
<center><img src="3.png" class="img"></img></center>
<b><label>User Name</label>
<input type="text" name="username" id="form" placeholder="Enter your User Name" required></input>
<br><b>
<label>User Email</label>
<input type="email" name="email" id="form" placeholder="Enter your Email" required></input>
<br><b>
<label>User Password</label>
<input type="password" name="pass" id="form" placeholder="Enter your Password" required></input>
<br><b>
<label>Confirm Password</label>
<input type="password" name="conpass" id="form" placeholder="Confirm your Password" required></input>
<br>
<input type="submit" name="reg" id="btn" value="Submit"></input>
<a href="login.php"><input type="button" name="back" id="btn" value="Back to Log In"></input>
</form>	

<?php 
	if(isset($_POST['reg'])){ //user submit button a click korese kina ta check korte isset er if statement
	$name = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$conpass = $_POST['conpass'];
	
	if($pass == $conpass){ //password check hosse 2ta password same hole porer line execute hobe
		
		$query = "select*from user where email='$email'"; //same email gese kina ta check korte ai code
		$query_check = mysqli_query($conn,$query);//query run korate
	if($query_check){   //query run korlo kina tai
		
		if(mysqli_num_rows($query_check)>0 ){  //email check korse 0 er cheye boro maane 1bar email use hole nicher line echo hobe
			echo"
			<script> 
			alert('Email Already in used');
			window.location.href='login.php';
			</script>
			";//email already used hole seta k login a pathate window use korte hoi
		}else{  //email check
			$insertion = "insert into user values('$name','$email','$pass')";
			$run = mysqli_query($conn,$insertion);//query run korate
		if($run){ //insertion(register input) run korlo kina ta check korbo
		echo"
			<script> 
			alert('You are Successfully Regisered');
			window.location.href='home.php';
			</script>
			";	//insertion(register) success tai home page a pathai dibe
		}else{  //run else
			echo"
			<script> 
			alert('Connection Failed!');
			window.location.href='reg.php';
			</script>
			";  //insertion(register input) run na korle again register page pathabe
		}
	}
	
	}else{  //query_check
		echo"
			<script> 
			alert('Database Error!');
			window.location.href='reg.php';
			</script>
			";
	}
	
	}
	else{ //password else check
		echo"
			<script> 
			alert('Password and Confirm Password doesn't match!');
			window.location.href='reg.php';
			</script>
			";
	}
	
	}
	else{  //isset else
		
	}
?>


</div>
</body>
</html>