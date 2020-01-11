<?php
require 'configdb/config.php'; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
 <body> 
  <div class ="jumbotron" style = "background:url('imgs/bet365.png') no-repeat;     background-position: center;
    background-size: cover;
    padding: 85px;" > </div>
  <div class = "container-fluid"> 
  <div class = "row" >
        <div class ="col-md-3">
		   <div class = "list-group">
		        <a href="homepage.php" class="list-group-item active"><b>Home</b></a>
				<a href="homepage.php" class="list-group-item list-group-item-action list-group-item-secondary enabled"><B>FOOTBALL</B></a>
				<!--<a href="homepage.php" class="list-group-item list-group-item-action list-group-item-secondary enabled">Add football match</a>-->
				<a href="login.php" class="list-group-item list-group-item-action list-group-item-secondary enabled">Log Out</a>
			</div>			
        </div>
        <div class = "col-md-8">
          <div class = "card">		
	 	     <div class="card-body"    style = "background-color:#009432;color:#ffffff;">
	                <h3   style= "font-size:20px; " ><b>Add a match </b>  </h3>		 
			 </div>
			 <div class = "card-body"  style = "background-color:#fbc531;">
			    <form class = "form-group" action="homepage.php" method = "post">
				   <label>Echipa 1:</label>
				   <input type="text" name="echipa1" class="form-control"><br>
				   <label>VS</label>
				   <input type="text" name="vs" class="form-control"><br>
				   <label>Echipa 2</label>
				   <input type="text" name="echipa2" class="form-control"><br>
				   <label>Cota Ech1</label>
				   <input type="text" name="ech1" class="form-control"><br>
				   <label>Cota Egal</label>
				   <input type="text" name="egal" class="form-control"><br>
				   <label>Cota Ech2:</label>
				   <input type="text" name="ech2" class="form-control"><br>
					<input type="submit" class="btn btn-primary btn-lg" name= "insert" style="width:100%;"value="Insert match">
				</form>
			 </div>
		  </div>
	    </div>
        <div class = "col-md-1"></div>
</div>
<?php
if(isset($_POST['insert']))
{
	$echipa1=$_POST['echipa1'];
	$vs=$_POST['vs'];
	$echipa2=$_POST['echipa2'];
	$ech1=$_POST['ech1'];
	$egal=$_POST['egal'];
	$ech2=$_POST['ech2'];
	$query="insert into meciuri(echipa1,vs,echipa2,ech1,egal,ech2) 
	                         values('$echipa1','$vs','$echipa2','$ech1','$egal','$ech2')";
	$result=mysqli_query($con,$query);	
    if($result)
	{
		
		echo "<script> alert('Match has been added') </script>";
		echo "<script> window.open('homepage.php','_self') </script>";
	}

	
}

?>

</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>