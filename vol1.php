<?php
session_start();
if(isset($_SESSION['login_user'])){

}else{
	header("location: index.php");
}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Donor</title>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<style type="text/css">
	 td{
		font-size: 20px;
	}
th{
		font-size: 25px;
	}

</style>

	<body style="background-image: url(images/backgroundimg.jpeg); background-repeat: cover;">
		<?php require_once "pro.php"; ?>

		<?php

		if (isset($_SESSION['message'])): ?>

			<div class="alert alert-<?=$_SESSION['msg_type']?>">
             
             <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>

            </div>

        <?php endif ?>

		<div class="container">

		<?php
		 $mysqli = new mysqli("localhost","root","","crud") or die(mysqli_error($mysqli));
		 $result = $mysqli->query("SELECT * FROM donate") or die(mysqli_error);
		 //pre_r($result);
		 ?>

		 <div class="row justify-content-center">
		 	<table class="table">
		 		<thead>
		 			<tr>
		 				<th>Donor</th>
		 				<th>Details</th>
		 				<th>Type</th>
		 				<th>Quantity</th>
		 				<th>Status</th>
		 			</tr>
		 		</thead>
		   <?php
		 		while ($row = $result->fetch_assoc()): ?>
		 			<tr>
		 				<td><?php echo $row['donor']; ?></td>
		 				<td><?php echo $row['details']; ?></td>
		 				<td><?php echo $row['type']; ?></td>
		 				<td><?php echo $row['quantity']; ?></td>
		 				<td><?php echo $row['status']; ?></td>
		 			</tr>
		 		<?php endwhile;?>
		 	</table>
		 </div>

		 <?php
		 function pre_r( $array ){
		 	echo '<pre>';
		 	print_r($array);
		 	echo '</pre>';
		 }
		?>


	</div>
	<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  position:absolute;
     top:0;
     right:0;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
<button class="button button1" id="logout"><a href="moh1.php">BACK</a></button>
	
	
	</body>
	</html>