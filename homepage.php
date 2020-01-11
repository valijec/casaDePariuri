<?php
require 'configdb/config.php'; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
 <body> 
  <div class ="jumbotron" style = "background:url('imgs/coverhp.png') no-repeat;     background-position: center;
    background-size: cover;
    padding: 85px;" > </div>
  <div class = "container-fluid"> 
  <div class = "row" >
        <div class ="col-md-3">
		   <div class = "list-group">
		        <a href="homepage.php" class="list-group-item active"><b>Home</b></a>
				
				<a href="homepage.php" class="list-group-item list-group-item-action list-group-item-secondary enabled"><b>FOOTBALL</b></a>
				<!--<a href="homepage2.php" class="list-group-item list-group-item-action list-group-item-secondary enabled">Add football match</a>-->
				
				<a href="login.php" class="list-group-item list-group-item-action list-group-item-secondary enabled">Log Out</a>
			</div>			
        </div>
        <div class = "col-md-8">
          <div class = "card">		
	 	     <div class="card-body"    style = "background-color:#009432;color:#ffffff;margin-bottom: -40px">
	                <h3   style= "font-size:20px; " ><b>Europa League </b>  </h3>		 
			 </div>
			 <div class ="card-body" ></div>				 
       <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Echipa1</th>
      <th scope="col">VS</th>
      <th scope="col">Echipa2</th>
      <th scope="col">1</th>
	  <th scope="col">X</th>
	  <th scope="col">2</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  
  
   <?php get_meciuri_europa(); ?>
  
  </tbody>
</table>         
		  </div>
	    </div>
		
		
		
     <div class = "col-md-8 " style="left: 338px">
          <div class = "card">		
	 	     <div class="card-body"    style = "background-color:#009432;color:#ffffff;margin-bottom: -40px">
	                <h3   style= "font-size:20px; " ><b>Champions League </b>  </h3>		 
			 </div>
			 <div class ="card-body" ></div>				 
       <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Echipa1</th>
      <th scope="col">VS</th>
      <th scope="col">Echipa2</th>
      <th scope="col">1</th>
	  <th scope="col">X</th>
	  <th scope="col">2</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  
  
   <?php get_meciuri_champions(); ?>
  
  </tbody>
</table>         
		  </div>
	    </div>		
        <div class = "col-md-1"></div>
</div>
<?php


function get_meciuri_europa(){
$query="select * from meciuri_europa";
global $con;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
	$echipa1=$row['echipa1'];
	$vs=$row['vs'];
	$echipa2=$row['echipa2'];
	$ech1=$row['ech1'];
	$egal=$row['egal'];
	$ech2=$row['ech2'];
	echo "<tr>
	  <td>$echipa1</td>
      <td>$vs</td>
      <td>$echipa2</td>
	  <td>$ech1</td>
	  <td>$egal</td>
	  <td>$ech2</td>
	  
	</tr>";
}

	
}







function get_meciuri_champions(){
$query="select * from meciuri_champions";
global $con;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
	$echipa1=$row['echipa1'];
	$vs=$row['vs'];
	$echipa2=$row['echipa2'];
	$ech1=$row['ech1'];
	$egal=$row['egal'];
	$ech2=$row['ech2'];
	echo "<tr>
	  <td>$echipa1</td>
      <td>$vs</td>
      <td>$echipa2</td>
	  <td>$ech1</td>
	  <td>$egal</td>
	  <td>$ech2</td>
	  
	</tr>";
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