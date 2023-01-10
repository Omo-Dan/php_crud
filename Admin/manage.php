<?php include('mncon.php');

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
                   <th colspan="2">Action</th>
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

           <td>
                <a class="ebtn" href="manage.php?edit= <?php echo $row['id']; ?>">Edit</a>
           </td>
           <td>
                <a  class="dbtn" href="mncon.php?del= <?php echo $row['id']; ?>">Delete</a>
           </td>
           </tr>

          <?php }?>
    
    <form action="mncon.php" method="post">
    <div class="inputg">
        <label for="">Full Name</label>
        <input type="text" name="fn" value=" <?php echo $name; ?>">
    </div>
    <div class="inputg">
        <label for="">Email</label>
        <input type="text" name="em" value=" <?php echo $email; ?>">
    </div>
    <div class="inputg">      
        <label for="">Gender</label>
        <input type="text" name="gn" value=" <?php echo $gender; ?>">
    </div>
    <div class="inputg">
        <label for="">Block</label>
        <input type="text" name="bl" value=" <?php echo $block; ?>">
    </div>
    <div class="inputg">
        <label for="">Room Name</label>
        <input type="text" name="rm" value=" <?php echo $room; ?>">
    </div>
    
    <div class="inputg">
        <label for="">Bed</label>
        <input type="text" name="be" value=" <?php echo $bed; ?>">
    </div>
    <div class="inputg">
        <label for="">Payment Code</label>
        <input type="text" name="pc" value=" <?php echo $code; ?>">
    </div>
    <div class="inputg">
        <label for="">Payment Amount</label>
        <input type="number" name="am" value=" <?php echo $amount; ?>">
    </div>
    <div class="inputg">
    <?php if($edit_state==false):?>
        <button type="submit" class="btn" name="save">Save</button>
    <?php else: ?>
        <button type="submit" class="btn" name="update">Update</button>
    <?php endif ?>   
    </div>
    </form>
</body>
</html>