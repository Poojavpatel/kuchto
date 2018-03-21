<?php
 function Connect()
{
 $dbhost="localhost";
 $dbuser="root";
 $dppass="";
 $dbname="contact";
//create connection
 $conn=new mysqli($dbhost,$dbuser,$dppass,$dbname) or die($conn->connect_error);
 return $conn;
}
?>
