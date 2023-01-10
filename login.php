<?php include('user.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="r.css">
    <title>User login</title>
</head>
<body>
  <?php include('header.php');?>
    <div class="header">
    <h2>Login</h2>
    </div>
    <form action="login.php" method="post">
    <!----------display  validation errors------------->
    <?php include('errors.php');?>

       <div class="input">
       <label for="">Username</label>
       <input type="text" name="username">
       </div>


       <div class="input">
       <label for="">Password</label>
       <input type="password" name="password">
       </div>


       <div class="input">
       <button type="submit" name="log" class="btn">login</button>
       </div>
       <p>
       Do not have an Account? <a href="register.php">Sign up</a>
       </p>

    </form>
</body>
</html>