<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
   <?php include('header.php');?>
    <div class="header">
        <h2>Add Block</h2>
        </div>
     <form action="connection.php" method="post">
         <div class="input">
             <label for="">Block Name</label>
             <input type="text" name="blockname" required placeholder="Block name here">
         </div>
          <div class="input">
        <label for="">Gender</label>
        <select name="gender" id="" style="height: 30px; text-transform:uppercase; width: 93%;">
           <option value="Male"  selected>Male</option>
           <option value="Female"> Female</option>
           <option value="Other" >Others</option>
           </select>
   </div>
         <div class="input">
          <label for="">Description</label>
          <input type="text" name="description" required placeholder="Description">
     </div>
     <div class="input">
          <label for="">Status</label>
          <input type="text" name="status" required placeholder="Block Status">
     </div>
     
    

     <div class="input">
          <button type="submit" name="block" class="btn">Add Block</button>
     </div>
     </form>
    
</body>
</html>