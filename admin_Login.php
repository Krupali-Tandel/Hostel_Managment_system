<?php 
include 'partials/dbconnect.php';
session_start();

$cpassword = "1234";
$err = false ;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password'];
if($password == $cpassword && $email != ""){
    $studentid = "";
    $sqle = "SELECT `Admin_name`,`admin_login_ID`  FROM `admin_login` WHERE `admin_email` = '$email'";
    $resulte = mysqli_query($conn , $sqle);
    if($resulte){
        
        $row = mysqli_fetch_assoc($resulte);
        if(mysqli_num_rows($resulte) > 0){
            $adminiserid  = $row["student_enrollment"];
            $Name = $row["Admin_name"];
            $_SESSION['adminuserid'] = $studentid ;
            $_SESSION['admin_name'] = $Name;
            $err = true ;
            echo "<script type='text/javascript'>window.top.location='http://localhost/Hostel_Managment_System/admin_dashboard.php';</script>"; exit;
         
        }
    }
    else {
        echo "error occured while fetching the data";
        $err = false ;
    }
    
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Login</title>
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
    if(!$err){
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