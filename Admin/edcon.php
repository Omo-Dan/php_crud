<?php
session_start();
$name="";
$block="";
$bed="";
$charge="";
$id=0;

$edit_state=false;

$db =mysqli_connect('localhost', 'root', '', 'bondo');
//save data through edit form
if (isset($_POST['save'])) {
$name =$_POST['nm'];
$block =$_POST['bl'];
$bed =$_POST['be'];
$charge =$_POST['ch'];

$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO room (name, block, bed, charge) VALUES('$name', '$block', '$bed','$charge')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: editroom.php');
//echo "Record Inserted";
}

//update records
if (isset($_POST['update'])){
    $name =$_POST['nm'];
    $block =$_POST['bl'];
    $bed =$_POST['bed'];
    $charge =$_POST['ch'];
    $id=($_POST['id']);

  mysqli_query($db, "UPDATE room set name='$name', block='$block', bed='$bed',
  charge='$charge'
   where id=$id");
  $_SESSION['msg']="Record updated successfully";
  header('location: editroom.php');
}

//delete records
if(isset($_GET['del'])){
   $id=$_GET['del'];
   mysqli_query($db, "DELETE FROM room WHERE id=$id");
   $_SESSION['msg']="Record deleted successfully";
  header('location: editroom.php');
}

$results =mysqli_query($db, "SELECT * FROM room");

?>