<?php
require 'db1.php';

$conn    = Connect();
 
  
$first_name    = $conn->real_escape_string($_POST['first_name']);
$last_name    = $conn->real_escape_string($_POST['last_name']);
$email   = $conn->real_escape_string($_POST['email']);
$password  = $conn->real_escape_string($_POST['password']);
$confirm_password  = $conn->real_escape_string($_POST['confirm_password']);

if($password!=$confirm_password){
	echo 'Please re-enter correct Password';//error
}else{

$query   = "INSERT into acc(first_name,last_name,email,password) VALUES('$first_name','$last_name','$email','$password')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
header('location:http://localhost/freehtml5streets/index3.html');
}
$conn->close();
 
?>