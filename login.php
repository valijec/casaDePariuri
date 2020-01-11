<?php
session_start();
require 'configdb/config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Page </title>
<link rel = "stylesheet" href = "style.css">
</head>
<body style="background:url('imgs/coverpar.jpg') no-repeat; background-size:1366px 655px;opacity:">

    <div id = "login-wrapper">
	   <center>
		   
	       <img src = "imgs/logo.jpg" class ="avatar" />
	   </center>
	 
	 
	   <form class ="myform" action="login.php" method="post">
	    <label><b>Username:<b> </label><br>
		<input name ="username" type="text" class= "inputvalues" placeholder = "Insert your username"/><br>
		<label><b>Password:</b></label><br>
		<input name = "password"type="password" class= "inputvalues" placeholder = "Insert your password"/> <br><br>
		<input name = "login" type="submit" id = "login_btn" value= "Login"/> <br><br>
		<a href="register.php"><input type="button" id = "register_btn" value = "Register"/></a>
		
	   </form>	
	  <?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query="select * from userinfotable WHERE username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['username']= $username;
				header('location:homepage.php');
			}
			else
			{
			
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
	   
	</div>
</body>
</html>


