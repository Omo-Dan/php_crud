<?php include('edcon.php');

//fetch records to be upadated
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
      $edit_state=true;
    $rec=mysqli_query($db, "SELECT * FROM room WHERE id=$id");
    $record=mysqli_fetch_array($rec);
    $name=$record['nm'];
    $block=$record['bl'];
    $bed=$record['be'];
    $charge=$record['ch'];
    
    $id=$record['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css ">
    
    
    <title>Rooms Report</title>
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
           <thead class="table-brown">
                   <tr>
                   <th>Id</th>
                   <th>Room Name</th>
                   <th>Block Name</th>
                   <th>Bed Name</th>
                   <th>Charge</th>
                   
                   <th colspan="2">Action</th>
                   </tr>
          </thead>
          <tbody>

          <?php while($row=mysqli_fetch_array($results)){?>
           <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['name'];?></td>
           <td><?php echo $row['block'];?></td>
           <td><?php echo $row['bed'];?></td>
           <td><?php echo $row['charge'];?></td>
           
           <td>
                <a class="ebtn" href="editroom.php?edit= <?php echo $row['id']; ?>">Edit</a>
           </td>
           <td>
                <a  class="dbtn" href="edcon.php?del= <?php echo $row['id']; ?>">Delete</a>
           </td>
           </tr>

          <?php }?>
                 
          </tbody>
    </table>

    <form action="edcon.php" method="post" >
     <input type="hidden" name="id" value=" <?php echo $id; ?>">

    <div class="inputg">
        <label for="">Room Name</label>
        <input type="text" name="nm"  value=" <?php echo $name; ?>">
    </div>
    <div class="inputg">
        <label for="">Block Name</label>
        <input type="text" name="bl" value=" <?php echo $block; ?>">
    </div>
    <div class="inputg">
        <label for="">Bed Name</label>
        <input type="text" name="be" value=" <?php echo $bed; ?>">
    </div>
    <div class="inputg">
        <label for="">Cost of the room </label>
        <input type="text" name="ch" value=" <?php echo $charge; ?>">
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