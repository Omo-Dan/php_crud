<?php include('user.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="r.css">
    <title>User registration</title>
</head>
 <?php include('header.php');?>
<body>
    <div class="header">
    <h2>Register</h2>
    </div>
    <form action="register.php" method="post">
    <!----------display  validation errors------------->
    <?php include('errors.php');?>
       <div class="input">
       <label for="">Username</label>
       <input type="text" name="username" value="<?php echo $username;?>">
       </div>

       <div class="input">
       <label for="">Email</label>
       <input type="email" name="email" value="<?php echo $email;?>">
       </div>

       <div class="input">
       <label for="">Password</label>
       <input type="password" name="password1">
       </div>

       <div class="input">
       <label for="">Confirm Password</label>
       <input type="password" name="password2">
       </div>

       <div class="input">
       <button type="submit" name="reg" class="btn">Register</button>
       </div>

       <p>
       Already have an Account? <a href="login.php">Sign in</a>
       </p>
    </form>
</body>
</html>