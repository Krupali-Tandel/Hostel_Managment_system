<?php
include 'partials/dbconnect.php';
session_start();
$errA = false ;
if ($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['publish_button'])){
$notice_content = $_POST['notice_content'];
    addNotice($notice_content , $errA);
}

}


function addNotice($notice_content ){
$sqlA = "INSERT INTO `notice` (`NoticeID` , `Notice_content`, `DateAndTime`) VALUES ('','$notice_content' , current_timestamp())";
$resultA = mysqli_query($GLOBALS['conn'] , $sqlA);
if($resultA){
$GLOBALS['errA']= true ;
echo "<script type='text/javascript'>window.top.location='http://localhost/Hostel_Managment_System/admin_notice.php';</script>"; exit;
}
}


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
#big_notice_container {
    width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.display_notice{
    display: flex;
    flex-wrap: wrap;
}
#admin_dashboard{
    height : 73rem ;
}
#notice_container {
    /* margin-top: 150px; */
    /* margin-left: 50px */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.newsletter-subscribe {
    padding: 8px 0;
    }
    </style>
</head>

<body>

    <div id="admin_notice_container">
        <div id="admin_dashboard">
            <div id="admin_image"></div>
            <p><?php 
            if(isset($_SESSION['adminuserid']) && isset($_SESSION['admin_name'])){
                $Admin_name = $_SESSION['admin_name'] ;    
               }
               else {
               die("session cannot be set");
               }
               echo ucwords($Admin_name);
            ?>&nbsp;</p>
            <ul id="list">
                <li class="list_items"><a class="list_item_link" href="index.php">Home</a></li>
                <li class="list_items"><a class="list_item_link" href="admin_rooms.php"><i
                            class="fa fa-square list_icon"></i>Rooms</a></li>
                <li class="list_items"><a class="list_item_link" href="manage_students.php"><i
                            class="icon ion-person-stalker list_icon"></i>Student Details</a></li>
                <li class="list_items"><a class="list_item_link" href="Delete_student.php"><i
                            class="icon ion-person-stalker list_icon"></i>UnRegister</a></li>
                <li class="list_items"><a class="list_item_link" href="Admin_registration.php"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                            class="list_icon">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                fill="currentColor"></path>
                        </svg>Registration</a></li>
                <li class="list_items"><a class="list_item_link" href="admin_notice.php"><i
                            class="material-icons list_icon">notifications_none</i>Notice</a></li>
                <!-- <li class="list_items"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24" fill="none" class="list_icon">
                        <path d="M7 6C5.34315 6 4 7.34315 4 9H20C20 7.34315 18.6569 6 17 6H7Z" fill="currentColor">
                        </path>
                        <path d="M7 18C5.34315 18 4 16.6569 4 15H20C20 16.6569 18.6569 18 17 18H7Z" fill="currentColor">
                        </path>
                        <path
                            d="M3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H21C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11H3Z"
                            fill="currentColor"></path>
                    </svg><a class="list_item_link" href="#">Menu</a></li> -->
                <!-- <li class="list_items"><a class="list_item_link" href="#"><i class="fa fa-exchange list_icon"></i>Change
                        Password</a></li> -->
                        <!-- <li class="list_items"><a class="list_item_link" href="show_complain.php"><i class="fa fa-exchange list_icon"></i>Show Complaints</a></li> -->
                        <li class="list_items"><a class="list_item_link" href="show_complain.php"><i class="fa fa-exchange list_icon"></i>Show Complaints</a></li>
                <li class="list_items"><a class="list_item_link" href="attandance.php"><i
                            class="fa fa-registered list_icon"></i>Attendance</a></li>
                <!-- <li class="list_items"><a class="list_item_link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>LogOut</a></li> -->
            </ul>
        </div>
        <div id="big_notice_container">
            <section class="newsletter-subscribe">
                <div class="container" id="notice_container">
                    <div class="intro">
                        <h2 class="text-center">Notice to Publish</h2>
                    </div>
                    <form class="d-flex justify-content-center flex-wrap" method="post">
                        <div class="mb-3"><textarea class="form-control" name="notice_content"></textarea></div>
                        <div class="mb-3"><button class="btn btn-primary" name = "publish_button" type="submit">Publish</button></div>
                    </form>
                </div>
            </section>

            <div class="display_notice">
            <?php 
             if(isset($_POST['Delete'])){
                $did = $_POST['id'];
                $query = $conn->prepare( "DELETE FROM notice WHERE NoticeID=?" );
                $query->bind_param( "s", $did );
                $query->execute();
            }
            ?>
                <?php 
                $sqldisplay_notice = "SELECT * FROM `notice`";
                $resultdisplay = mysqli_query($conn , $sqldisplay_notice);
                $number_display = mysqli_num_rows($resultdisplay);

                $index = 1 ;
                $count = 1;
                if($number_display > 0){
                    while($noticedata = mysqli_fetch_assoc($resultdisplay)){
                        echo '<form method ="POST">
                        <div class="card" id = "card'.$index.'" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Notice '. $count .'</h5>
                            <p class="card-text" id = "notice'.$index.'">'.$noticedata['Notice_content'] .'</p>
                           
                            <input type ="hidden" name = "id" value ="'.$noticedata['NoticeID'].'">
                            <input  class="btn btn-primary" value = "Delete" name="Delete" type="submit">
                            
                        </div>
                    </div>
                    </form>';
                    $index = $index + 1;
                    $count = $count + 1;
                    }
                }
                ?>
            </div>
        </div>
    </div>
 >
   <script>
        console.log("Welcome to the notice page of the admin side");
        function publishmessage() {
    alert("Notice Published Successfully ");
}

 </script>
 
 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
</body>

</html>