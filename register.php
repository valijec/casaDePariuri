<?php
require 'configdb/config.php'; 

?>
<!DOCTYPE html>
<html>
<head>
<title> Register Page</title>
<link rel = "stylesheet" href = "style.css">
</head>
<body style="background:url('imgs/coverpar.jpg') no-repeat; background-size:1366px 655px;opacity:">

    <div id = "register-wrapper">
	  
		   <h1 align ="center"><font color= "black">Register Page </font> </h1> 
	       
	   
	 
	 
	  <form class ="myform" action="register.php" method="post">
	        <label><b>Full Name:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Full Name" required/><br><br>
			<label><b>Gender:</b></label>
			<input type="radio" class="radiobtns" name="gender" value="male" required> Male
			<input type="radio" class="radiobtns" name="gender" value="male" required> Female<br><br>
			<label><b>Select one of the options:</b></label>
			<select class="type" name="type">
			  <option value="Admin">Admin</option>
			  <option value="User">User</option>
			</select><br><br>
	      <label><b>Username:<b> </label><br>
		  <input name="username" type="text" class= "inputvalues" placeholder = "Insert your username" required/><br><br>
		  <label><b>Password:</b></label><br>
		  <input name = "password" type="password" class= "inputvalues" placeholder = "Insert your password" required/> <br><br>
		  <label><b>Confirm your password:</b></label><br>
		  <input name="cpassword" type="password" class= "inputvalues" placeholder = "Confirm your password" required/> <br><br>
		  <input name="register" type="submit" id = "signup_btn" value= "Create Account"/> <br><br>
		  <a href = "login.php"><input type="button" id = "back_btn" value = "Back to Login Page"/></a>
		
	   </form>	
	   
	   <?php
			if(isset($_POST['register']))
			{

				$fullname =$_POST['fullname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$gender = $_POST['gender'];
				$type = $_POST['type'];

				

				if($password==$cpassword)
				{
					$query= "select * from userinfotable WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{
						$query= "insert into userinfotable values('','$fullname','$gender','$type','$username','$password')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Account has succesfully been created.Go back to login page") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
						}
					}
					
					
				}
				else{
				echo '<script type="text/javascript"> alert("Password and Confirm password does not match!") </script>';	
				}
				
				
				
				
			}
		?>
    </div>
</body>
</html>


