<?php



$mysqli = new mysqli("localhost","root", "", "crud") or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$volunteer='';
$details='';
$type='';
$quantity='';
$location='';
$status='';

if (isset($_POST['save'])){
    $volunteer = $_POST['volunteer'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $mysqli->query("INSERT INTO volunteer (volunteer,details,type,quantity,location,status) VALUES('$volunteer','$details','$type','$quantity','$location',
        '$status')") or die($mysqli->error);

        $_SESSION['message'] = "record has been saved";
        $_SESSION['msg_type'] = "success";


    header("location: ind2.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM volunteer WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: ind2.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM volunteer WHERE id=$id") or die($mysqli->error());
   $conn=mysqli_connect('localhost','root','','crud');
    $query="SELECT * FROM `volunteer` WHERE id='$id'";
     
    $run=mysqli_query($conn,$query);
      $data=mysqli_num_rows($run);
    if ($data==1){
    $row = $result->fetch_array();
    $volunteer = $row['volunteer'];
    $details= $row['details'];
    $type= $row['type'];
    $quantity= $row['quantity'];
    $location= $row['location'];
    $status= $row['status'];
    }

}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$volunteer = $_POST['volunteer'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];
    $status = $_POST['status'];

	$mysqli->query("UPDATE volunteer SET volunteer='$volunteer', details = '$details', type='$type', quantity='$quantity',location='$location',status='$status' WHERE id = $id") or die($mysqli->error);
    
    $_SESSION['message'] = "record has been updated";
    $_SESSION['msg_type'] = "warning";
    header("location: ind2.php");
}
