<html>
<head>
<title>
change plan</title>
</title>
</head>
<body>
<?php
session_start();
$mysqli = new mysqli ("localhost","root","","contact");
if (isset ($_POST['name']))

$user = $_POST['name'];
$email=$_POST['email'];
$plan = $_POST['plan'];
$address = $_POST['address'];
$phone=$_POST['phone'];
//if($plan !=$cplan)
	//die("Plan does not match");

$query = "UPDATE `form` SET `email`='$email' ,`plan`='$plan' ,`address`='$address', `phone`='$phone' where `name`='$user'";
if(!$mysqli->query($query)){
die(mysqli_error($mysqli));}
else
{ echo 'update successful';
}

?>
<br><br>
			<button type="button" ><a href="http://localhost/freehtml5streets/my.html" class="button">GO BACK </a></button>
</body>
</html>