<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hosteller</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="nav_container">
        <nav class="navbar navbar-light navbar-expand-md fixed-top" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" id="navbar_brand" href="#">Hosteller</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/Hostel_Managment_System/admin_Login.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Hostel_Managment_System/Login.php">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Hostel_Managment_System/notice.php">Notice&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Hostel_Managment_System/menu.php">Menu&nbsp;</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us&nbsp;</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Rooms</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/Hostel_Managment_System/Login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
<path d="M11 16L7 12M7 12L11 8M7 12L21 12M16 16V17C16 18.6569 14.6569 20 13 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H13C14.6569 4 16 5.34315 16 7V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> LogIn
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
<path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> LogOut
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-facebook social_media"> </i>
                                <i class="fa fa-instagram social_media"></i>
                                <i class="fa fa-twitter social_media"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
<path d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="main_page">
        <h1 id="main_heading">Hosteller</h1>
        <p id="heading_para">Book Your Stay !!</p>
    </div>
    <div id="about_us">
        <div id="about_us_image"></div>
        <div id="about_us_content">
            <p id="about_us_para"><br>Our website Hosteller Provides Hostel managment services that are very hectic and time comsuming when done manually. It will be helpful for the students to stay with the latest updates happening in the hostel. It will be very helpful for the hostel managment staffs to better manage and monitor everything happening in the hostel.  <br><br></p>
            <button class="btn btn-primary" id="about_us_button" onclick="about()" type="button">More About Us!</button>
        </div>
    </div>
    <div id="facilities">
        <h1 id="facilities_heading">Facilities</h1>
        <p id="facilities_para">What We Offer</p>
        <div id="container">
            <div class="card facilities_item">
                <i class="fas fa-shower facilities_icon"></i>
                <div class="card-body">
                    <h4 class="card-title">Hot Shower</h4>
                </div>
            </div>
            <div class="card facilities_item"><i class="fas fa-tv facilities_icon"></i>
                <div class="card-body">
                    <h4 class="card-title">TV Room</h4>
                </div>
            </div>
            <div class="card facilities_item"><i class="fas fa-wifi facilities_icon"></i>
                <div class="card-body">
                    <h4 class="card-title">Free WiFi</h4>
                </div>
            </div>
            <div class="card facilities_item"><i class="material-icons facilities_icon">kitchen</i>
                <div class="card-body">
                    <h4 class="card-title">Kitchen</h4>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <footer class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="#">Address&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jhalod Road Dahod&nbsp;</a></li>
                            <li><a href="#">Contact&nbsp; &nbsp;6698547112&nbsp;</a></li>
                            <li><a href="#">Email&nbsp; &nbsp; &nbsp; info.contact@gmail.co</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Hosteller</h3>
                        <p>Hosteller ! a wonderful and all-in-one platform for the hostel students and the staffs to better manage the students and hostel.</p>
                    </div>
                    <div class="col item social">
                        <a href="#">
                            <i class="icon ion-social-facebook"></i>
                        </a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-email"></i></a>
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Hosteller © 2022</p>
            </div>
        </footer>
    </div>
    <script>
     console.log("welcome to the world of programming");
     function about(){
        window.location.href = "http://localhost/Hostel_Managment_System/contact.php";
     }
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>