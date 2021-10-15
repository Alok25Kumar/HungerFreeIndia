<?php



$mysqli = new mysqli("localhost","root", "", "crud") or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$donor='';
$details='';
$type='';
$quantity='';
$status='';

if (isset($_POST['save'])){
    $donor = $_POST['donor'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $mysqli->query("INSERT INTO donate (donor,details,type,quantity,status) VALUES('$donor','$details','$type','$quantity','$status')") or die($mysqli->error);

        $_SESSION['message'] = "record has been saved";
        $_SESSION['msg_type'] = "success";


    header("location: ind.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM donate WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: ind.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM donate WHERE id=$id") or die($mysqli->error());
	$conn=mysqli_connect('localhost','root','','crud');
    $query="SELECT * FROM `donate` WHERE id='$id'";
     
    $run=mysqli_query($conn,$query);
      $data=mysqli_num_rows($run);
    if ($data==1){
	$row = $result->fetch_array();
	$donor = $row['donor'];
	$details= $row['details'];
	$type= $row['type'];
	$quantity= $row['quantity'];
	$status= $row['status'];
}

}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$donor = $_POST['donor'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

	$mysqli->query("UPDATE donate SET donor='$donor', details = '$details', type='$type', quantity='$quantity', status='$status' WHERE id = $id") or die($mysqli->error);
    
    $_SESSION['message'] = "record has been updated";
    $_SESSION['msg_type'] = "warning";
    header("location: ind.php");
}
