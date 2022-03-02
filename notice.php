<?php 
 include 'partials/dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Notice</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
        .container{
            display: flex;
    flex-wrap: wrap;
    width: 80%;
    margin-top : 120px ;
        }
    </style>
</head>

<body>
    <div id="nav_container">
        <nav class="navbar navbar-light navbar-expand-md fixed-top" id="navbar">
            <div class="container-fluid"><a class="navbar-brand" id="navbar_brand" href="#">Hosteller</a><button
                    data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                        class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="">About</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="admin_Login.php">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login.php">Student</a></li>
                        <li class="nav-item"><a class="nav-link" href="notice.php">Notice&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php">Menu&nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us&nbsp;</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="Login.html"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11 16L7 12M7 12L11 8M7 12L21 12M16 16V17C16 18.6569 14.6569 20 13 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H13C14.6569 4 16 5.34315 16 7V8"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>LogIn</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>LogOut</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook social_media"></i><i
                                    class="fa fa-instagram social_media"></i><i
                                    class="fa fa-twitter social_media"></i><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="notice_container">
        <div class="container">
            <?php 
                $sqle ="SELECT * FROM `notice` ";
                $resulte  = mysqli_query($conn , $sqle);
                $row = mysqli_num_rows($resulte);
                if($row > 0){
                 while($rowDATA = mysqli_fetch_assoc($resulte)){
                     echo '
                     <div class="card" style="width: 18rem;">
                     <div class="card-body">
                         <h5 class="card-title">Notice </h5>

                         <p class="card-text">'.$rowDATA['DateAndTime'] .'</p>
                         <p class="card-text">'.$rowDATA['Notice_content'] .'</p>
                        
 
                     </div>
                 </div>';
                    
                 }
                }
                ?>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>