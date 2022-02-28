<?php 
include 'partials/dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
#profile_super_big_container{
    display : flex;
}
.table_heading{
    width : 22rem ;
    /* text-align : center ; */
    padding : 1rem ;
}
#table_content {
    margin : 5rem;
}

    </style>
</head>

<body>
    <div id="profile_super_big_container">

    
    <div id="profile_big_container">
        <div id="profile_image"></div>
        <p><?php 
        if(isset($_SESSION['firstName']) && isset($_SESSION['lastName'])){
            $student_first_name = $_SESSION['firstName'] ;  
            $student_last_name = $_SESSION['lastName'] ;  
               
           }
           else {
           die("session cannot be set");
           }
           echo ucfirst($student_first_name) .' ' . ucfirst($student_last_name);
        ?>&nbsp;</p>
        <ul id="list">
            <li class="list_items"><a class="list_item_link" href="index.html">Home</a></li>
            <!-- <li class="list_items"><a class="list_item_link" href="#"><i class="icon ion-android-home llst_icon"></i>Room Details</a></li>
            <li class="list_items"><a class="list_item_link" href="#"><i class="fa fa-exchange llst_icon"></i>Change Password</a></li> -->
            <li class="list_items"><a class="list_item_link" href="#"><i class="fa fa-user list_icon"></i>Profile</a></li>
            <li class="list_items">&nbsp;<a class="list_item_link" href="complain.html"><i class="fa fa-comment llst_icon"></i>Complain</a></li>
            <!-- <li class="list_items"><a class="list_item_link" href="#"><i class="far fa-money-bill-alt llst_icon"></i>Bill</a></li> -->
            <!-- <li class="list_items"><a class="list_item_link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="llst_icon">
  <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
  <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
</svg>LogOut</a></li> -->
        </ul>
    </div>
<div class="students_details">
  <h1 style = "text-align : center;">Student Details</h1>
<?php 
$userid = $_SESSION['userid'];
$sqlstudentdetails = "SELECT * FROM `student_information` INNER JOIN `guardian_information` ON `student_enrollment` = `student_ID` WHERE `student_enrollment`  = $userid";
$result_student_details = mysqli_query($conn , $sqlstudentdetails);
  $row = mysqli_num_rows($result_student_details);
  if($row > 0){
   while($rowDATA = mysqli_fetch_assoc($result_student_details)){
       echo '<table style="width:100%" id = "table_content">
       <tr>
           <th class ="table_heading">First Name:</th>
           <td>'.$rowDATA['first_name'].'</td>
       </tr>
       <tr>
           <th class = "table_heading">Middle Name:</th>
           <td>'.$rowDATA['middle_name'].'</td>
 </tr>
 <tr>
   <th class = "table_heading">Last Name:</th>
   <td>'.$rowDATA['last_name'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Allotted Room:</th>
   <td>'.$rowDATA['allotted_room_no'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Contact No:</th>
   <td>'.$rowDATA['contact_No'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Duration:</th>
   <td>'.$rowDATA['duration'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Date of Joining:</th>
   <td>'.$rowDATA['Date_of_Joining'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Email:</th>
   <td>'.$rowDATA['email'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Aadhar No:</th>
   <td>'.$rowDATA['aadhar_no'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Guardian Name:</th>
   <td>'.$rowDATA['guardian_name'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Relation With  The Guardian:</th>
   <td>'.$rowDATA['relation_with_guardian'].'</td>
</tr>
 <tr>
   <th class = "table_heading">Guardian Contact No:</th>
   <td>'.$rowDATA['guardian_contact'].'</td>
</tr>


</table>';
   } 
  }  

?>
    
</div>
</div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>