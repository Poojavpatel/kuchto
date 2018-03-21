<?php
require 'db.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$plan = $conn->real_escape_string($_POST['plan']);
//$quantity= $conn->real_escape_string($_POST['quantity']);
$address= $conn->real_escape_string($_POST['address']);
$phone= $conn->real_escape_string($_POST['phone']);

$query   = "INSERT into form (name,email,plan,address,phone) VALUES('" . $name . "','" . $email . "','" . $plan . "','" . $address. "','" . $phone . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "You have successfully submitted the form. <br>";

$conn->close();
 
?>
<html>
<head>
</head>
<body>
<button type="button" ><a href="http://localhost/freehtml5streets/my.html" class="button">GO TO MY ACCOUNT>> </a></button>
</body>
</html>