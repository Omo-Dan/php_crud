<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
   <?php include('header.php');?>
    <div class="header">
        <h2>Add Room</h2>
        </div>
     <form action="connection.php" method="post">
         <div class="input">
             <label for="">Room Name</label>
             <input type="text" name="nm" required placeholder="Room Name">
         </div>
        
         <div class="input">
          <label for="">Block</label>
          <input type="text" name="bl" required placeholder="Block">
            </div>
            <div class="input">
          <label for="">Bed</label>
          <input type="text" name="be" required placeholder="Bed name">
            </div>
            <div class="input">
                <label for="">Charge</label>
                <input type="number" name="ch" required placeholder="Room Charges">
            </div>
            
            

            <div class="input">
                <button type="submit" name="room" class="btn">Add Room</button>
            </div>
     </form>
    
</body>
</html>