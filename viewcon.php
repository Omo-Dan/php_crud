<?php
session_start();
$name ="";
$email ="";
$gender="";
$block ="";
$room="";
$bed ="";
$code ="";
$amount="";
$id=0;
$edit_state=false;

$db = mysqli_connect('localhost', 'root', '', 'bondo');

if (isset($_POST['save'])) {
    $name =$record['fn'];
    $email =$record['em'];
    $gender=$record['gn'];
    $block =$record['bl'];
    $room=$record['rm'];
    $bed =$record['be'];
    $code =$record['pc'];
    $amount =$record['am'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO book (name, email, gender, block, room,bed, code, amount)
 VALUES('$name', '$email', '$gender','$block', '$room', $bed, '$code', '$amount')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: manage.php');
//echo "Record Inserted";
}

//update records
if (isset($_POST['update'])){
    $name =$record['fn'];
    $email =$record['em'];
    $gender=$record['gn'];
    $block =$record['bl'];
    $room=$record['rm'];
    $bed =$record['be'];
    $code =$record['pc'];
    $amount =$record['am'];

  mysqli_query($db, "UPDATE book set name='$name', email='$email', gender='$gender',
  block='$block',room='$room',bed='$bed', amount='$amount'
   where id=$id");
  $_SESSION['msg']="Record updated successfully";
  header('location: manage.php');
}

//delete records
if(isset($_GET['del'])){
   $id=$_GET['del'];
   mysqli_query($db, "DELETE FROM book WHERE id=$id");
   $_SESSION['msg']="Record deleted successfully";
  header('location: manage.php');
}

$results =mysqli_query($db, "SELECT * FROM book");

?>