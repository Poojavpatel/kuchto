<html>
<head>
<title>
change password</title>
</title>
</head>
<body>
<?php
session_start();
$mysqli = new mysqli ("localhost","root","","register");
if (isset ($_POST['first_name']))

$user = $_POST['first_name'];
$pass = $_POST['password'];
$cpass = $_POST['confirm_password'];
if($pass !=$cpass)
	die("Password does not match");

$query = "UPDATE `acc` SET `password`='$pass' where `first_name`='$user'";
if(!$mysqli->query($query)){
die(mysqli_error($mysqli));}
else
{ echo 'update successful';
}

?>
<br><br>
			<button type="button" ><a href="http://localhost/freehtml5streets/my.html" class="button">GO TO MY ACCOUNT>>  </a></button>
</body>
</html>