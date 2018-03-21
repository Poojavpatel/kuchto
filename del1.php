 <html>
 <head>
 <title></title>
 </head>
 <body>
   <?php
   $id = ''; 
if( isset( $_GET['first_name'])) {
$id = $_GET['first_name']; }
         if(isset($_POST['delete'])) {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
			$dbname="register";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $name = $_POST['first_name'];
			$password = $_POST['password'];
            
            $sql = "DELETE FROM acc WHERE first_name = '$name' && password='$password'";
           
            $retval = mysqli_query( $conn ,$sql);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($conn));
            }
			
			
            echo "Account deleted successfully\n";
			
            
            mysqli_close($conn);
         }else {       }
            ?>
			<br><br>
			<button type="button" ><a href="http://localhost/freehtml5streets/index1.html" class="button">BACK TO HOME PAGE </a></button>
</body>
</html>
			