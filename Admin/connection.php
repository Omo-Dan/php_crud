<?php
if(isset($_POST['block'])){
$blockname =$_POST['blockname'];
$gender =$_POST['gender'];
$description =$_POST['description'];
$status =$_POST['status'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO block(block, gender, description,status) VALUES('$block', '$gender', '$description','$status')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: addblock.php');
//echo "Record Inserted";
}

if(isset($_POST['room'])){
$name=$_POST['nm'];
$block =$_POST['bl'];
$bed=$_POST['be'];
$charge =$_POST['ch'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO room(name, block, bed,charge) VALUES('$name', '$block','$bed', '$charge')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: main.php');
}

if(isset($_POST['book'])){
$fullname =$_POST['fn'];
$email =$_POST['em'];
$roomno =$_POST['rn'];
$block =$_POST['bl'];
$paycode =$_POST['pc'];
$amount =$_POST['amn'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO book(full, email, roomno,block, paycode, amount) VALUES('$full', '$name', '$roomno','$block', '$paycode', '$amount')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: book.php');
}

?>