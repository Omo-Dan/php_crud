<?php include('viewcon.php');

//fetch records to be upadated
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
      $edit_state=true;
    $rec=mysqli_query($db, "SELECT * FROM book WHERE id=$id");
    $record=mysqli_fetch_array($rec);
        $name =$record['fn'];
        $email =$record['em'];
        $gender=$record['gn'];
        $block =$record['bl'];
        $room=$record['rm'];
        $bed =$record['be'];
        $code =$record['pc'];
        $amount =$record['am'];
        $id=$record['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Hostel Bookings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css ">
    
</head>
<body>

<?php if (isset($_SESSION['msg'])):?>
    <div class="msg">
    <?php
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    </div>
<?php endif ?>

    <table class="table"> 
           <thead class="table-dark">
                   <tr>
                   <th>Id</th>
                   <th>Student Name</th>
                   <th>Email</th>
                   <th>Gender</th>
                   <th>Block</th>
                   <th>Room Name</th>
                   <th>Bed Name</th>
                   <th>Payment Code</th>
                   <th>Amount</th>
              
                   </tr>
          </thead>
          <tbody>

          <?php while($row=mysqli_fetch_array($results)){?>
           <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['name'];?></td>
           <td><?php echo $row['email'];?></td>
           <td><?php echo $row['gender'];?></td>
           <td><?php echo $row['block'];?></td>
           <td><?php echo $row['room'];?></td>
           <td><?php echo $row['bed'];?></td>
           <td><?php echo $row['code'];?></td>
           <td><?php echo $row['amount'];?></td>

          <?php }?>
    
    
</body>
</html>