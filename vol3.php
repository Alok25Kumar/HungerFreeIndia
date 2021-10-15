<?php



$mysqli = new mysqli("localhost","root", "", "crud") or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$hspot='';
$details='';
$type='';
$quantity='';
$status='';

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM hungerspot WHERE id=$id") or die($mysqli->error());
$conn=mysqli_connect('localhost','root','','crud');
	$query="SELECT * FROM `hungerspot` WHERE id='$id'";
     
    $run=mysqli_query($conn,$query);
      $data=mysqli_num_rows($run);
	if ($data==1){
	$row = $result->fetch_array();
	$hspot = $row['hspot'];
	$details= $row['details'];
	$type= $row['type'];
	$quantity= $row['quantity'];
	$status= $row['status'];
}

}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$hspot = $_POST['hspot'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

	$mysqli->query("UPDATE hungerspot SET hspot='$hspot', details = '$details', type='$type', quantity='$quantity', status='$status' WHERE id = $id") or die($mysqli->error);
    
    $_SESSION['message'] = "record has been updated";
    $_SESSION['msg_type'] = "warning";
    header("location: vol2.php");
}
