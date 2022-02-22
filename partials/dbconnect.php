<!-- the script for the db connection -->
<?php 
// variable for the connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "hostel_management_system";

//making the connection with the db
$conn = mysqli_connect($servername, $username, $password , $database);

//checking for the successful connection of the db 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
      echo "connected sucess";
  }


?>