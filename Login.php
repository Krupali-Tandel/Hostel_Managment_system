<?php 
// include 'partials/dbconnect.php';
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
$cpassword = "1234";
$err = false ;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password'];
if($password == $cpassword && $email != ""){
    $sqle = "SELECT `studentID` FROM `student` WHERE `email` = '$email'";
    $resulte = mysqli_query($conn , $sqle);
    if($resulte){
        
        $row = mysqli_fetch_assoc($resulte);
        if(mysqli_num_rows($resulte) > 0){
            $studentid = $row["studentID"];
            echo $studentid ;
        }
    }
    else {
        echo "error occured while fetching the data";
    }
    
    $sql = "INSERT INTO `login_table` (`loginID`,`studentID` ,  `Email`, `password`) VALUES ('','$studentid',' $email' , '$password')";
    $result = mysqli_query($conn , $sql);
    if($result){
      $err = true ;
    }
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>main_page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php 
    if($err){
        header("Location : http://localhost/Hostel_Managment_System/student_dashboard.php");
    }
    else {
        echo `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>LogIn Failed !</strong>Please Enter correct Email or Password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
    }
    ?>
    <section class="login-dark">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>