
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
$roomno =$_POST['rno'];
$name =$_POST['nm'];
$capacity =$_POST['cap'];
$block =$_POST['bl'];
$charge =$_POST['cha'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO rooms(roomno, name, capacity,block, charge) VALUES('$roomno', '$name', '$capacity','$block', 'charge')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: addroom.php');
}

if(isset($_POST['book'])){
$name =$_POST['fn'];
$email =$_POST['em'];
$gender =$_POST['gn'];
$block =$_POST['bl'];
$room =$_POST['rm'];
$bed =$_POST['be'];
$method=$_POST['md'];
$code =$_POST['pc'];
$amount =$_POST['am'];
$db = mysqli_connect('localhost', 'root', '', 'bondo');

$query = "INSERT INTO book(name, email, gender, block, room, bed, method, code, amount) 
VALUES('$name', '$email', '$gender','$block','$room', '$bed','$method','$code', '$amount')";

mysqli_query($db,$query);
echo "Record Inserted";
header('location: main.php');
}


?>