<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acces Logs</title>
</head>
<body>
	<?php include('includes/header.php');?>

</body>
</html>