<?php
include 'partials/dbconnect.php';
$errs = false;
$errg = true ;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $contact_no = $_POST['contactno'];
    $duration = $_POST['duration'];
    $aadhar_no = $_POST['aadharno'];
    $email = $_POST['email'];
    $address = $_POST['address'];


// taking the information of the guardian 
$guardian_name = $_POST['guardianname'];
$relation_with_guardian = $_POST['relation_with_guardian'];
$guadian_contact_no = $_POST['guardian_contact'];

//STORE THE VALUES IN THE DATABASE 

$sqls = "INSERT INTO `student` (`studentID`, `FirstName`, `MiddleName`, `LastName`, `contact_No`, `Date_of_Joining`, `Duration`, `gender`, `aadhar_no`, `address`, `email`) VALUES ('', '$firstname', '$middlename', '$lastname', '$contact_no', current_timestamp(), '$duration', 'female', '$aadhar_no', '$address','$email')";
$result = mysqli_query($conn , $sqls );
if($result){
    $errs = true;
}
else {
    echo "error";
}

$sqlg = "INSERT INTO `guardian` (`studentID`, `guardianName`, `Relationwith_guardian`, `guardian_contact`) VALUES ('', '$guardian_name', '$relation_with_guardian', '$guadian_contact_no')";
$resultg = mysqli_query($conn ,$sqlg);
if($resultg ){
$errg = true ;
}
else{
    echo "error";
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
    if($errs == true && $errg == true){
        echo `<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> Record Inserted Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
    }
    
    ?>

    <div id="registration_big_container">
        <div id="admin_dashboard">
            <div id="admin_image"></div>
            <p>admin name</p>
            <ul id="list">
                <li class="list_items"><a class="list_item_link" href="index.html">Home</a></li>
                <li class="list_items"><a class="list_item_link" href="admin_rooms.html"><i class="fa fa-square list_icon"></i>Rooms</a></li>
                <li class="list_items"><a class="list_item_link" href="#"><i class="icon ion-person-stalker list_icon"></i>Manage Students</a></li>
                <li class="list_items"><a class="list_item_link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="list_icon">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path>
</svg>Registration</a></li>
                <li class="list_items"><a class="list_item_link" href="admin_notice.html"><i class="material-icons list_icon">notifications_none</i>Notice</a></li>
                <li class="list_items"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="list_icon">
  <path d="M7 6C5.34315 6 4 7.34315 4 9H20C20 7.34315 18.6569 6 17 6H7Z" fill="currentColor"></path>
  <path d="M7 18C5.34315 18 4 16.6569 4 15H20C20 16.6569 18.6569 18 17 18H7Z" fill="currentColor"></path>
  <path d="M3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H21C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11H3Z" fill="currentColor"></path>
</svg><a class="list_item_link" href="#">Menu</a></li>
                <li class="list_items"><a class="list_item_link" href="#"><i class="fa fa-exchange list_icon"></i>Change Password</a></li>
                <li class="list_items"><a class="list_item_link" href="#"><i class="fa fa-registered list_icon"></i>Attendance</a></li>
                <li class="list_items"><a class="list_item_link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
<path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>LogOut</a></li>
            </ul>
        </div>
        <div id="form_details">
            <section class="contact-clean">
                <form method="post">
                    <h2 class="text-center">New Registration</h2>
                    <input class="form-control" type="text" placeholder="Room Allotted">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="firstname" placeholder="First Name">
                        <input class="form-control" type="text" name="middlename" placeholder="Middle Name">
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                        <input class="form-control" type="text" name="contactno" placeholder="Contact No">
                        <input class="form-control" type="date">
                        <label class="form-label">Duration</label>
                        <input class="form-control" type="number" name = "duration">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="formCheck-1">
                            <label class="form-check-label" for="formCheck-1">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="formCheck-2">
                            <label class="form-check-label" for="formCheck-2">Male</label>
                        </div>
                        <input class="form-control" type="text" name="guardianname" placeholder="Guardian Name">
                        <input class="form-control" type="text" name="relation_with_guardian" placeholder="Relation With Guardian">
                        <input class="form-control" type="text" name = "guardian_contact" placeholder="Guardian Contact No">
                    </div>
                    <input class="form-control" type="text" name ="aadharno" placeholder="Aadhar No">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name ="address" ></textarea>
                    <div class="mb-3">
                        <input class="form-control is-invalid" type="text" name="email" placeholder="Email">
                        <small class="form-text text-danger">Please enter a correct email address.</small>
                    </div>
                    <div class="mb-3"></div>
                    <div id="register_button" class="mb-3">
                        <button class="btn btn-primary button_register" type="submit">Register</button>
                        <button class="btn btn-primary button_register" type="button">Reset</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="index.js
  "></script>
</body>

</html>