<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$first_name=$_POST['first_name'];                                         
$password=$_POST['password'];
if ($first_name&&$password)
{
$connect = mysqli_connect("localhost","root","","register");
$query = mysqli_query($connect,"select * from acc where first_name='$first_name'");
echo mysqli_error($connect);
$numrows = mysqli_num_rows($query);
if($numrows!=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbfirst_name = $row['first_name'];
$dbpassword = $row['password'];
}
if($first_name==$dbfirst_name&&$password==$dbpassword)
{

 
header('location:http://localhost/freehtml5streets/my.html');

$_SESSION['first_name']= $dbfirst_name;
}
else
echo 'You have entered incorrect Password';
}
else
die("This username doesn't exist");
}
else
die("Please enter username and password");
mysqli_close($connect);
?>
</body>
</html>
