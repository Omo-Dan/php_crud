<?php
session_start();
$username="";
$email="";
$errors=array();
$db = mysqli_connect('localhost','root','','bondo');

if (isset($_POST['reg'])) {
    $username=($_POST['username']);
    $email=($_POST['email']);
    $password1=($_POST['password1']);
    $password2=($_POST['password2']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password1)) {
        array_push($errors, "Password is required");
    }
    if ($password1 != $password2) {
        array_push($errors, "Password do not match");
    }

    if (count($errors)==0) {
        $password=md5($password1);
        $sql="INSERT INTO user(username, email, password) VALUES('$username','$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="You are now logged in";
        header('location: main.php');
    }
}
//login user from interface
if (isset($_POST['log'])) {
    $username=($_POST['username']);
    $password=($_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors)==0) {
       $password=md5($password);
       $query="SELECT *FROM user WHERE username='$username' AND password='$password'";
       $result=mysqli_query($db, $query);

       if (mysqli_num_rows($result)==1) {
        $_SESSION['username']=$username;
        $_SESSION['success']="You are now logged in";
        header('location: main.php');
       }else{
           array_push($errors, "Wrong username/password combination");
           //header('location: index.php');
       }
    }

}

//logout
if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header('location: log.php');
}
?>