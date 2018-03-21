<?php
 function Connect()
{
 $dbhost="localhost";
 $dbuser="root";
 $dppass="";
 $dbname="register";
//create connection
 $conn=new mysqli($dbhost,$dbuser,$dppass,$dbname) or die($conn->connect_error);
 return $conn;
}
?>
