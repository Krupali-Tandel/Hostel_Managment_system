<?php 
include 'partials/dbconnect.php';
session_start();
$count  = 1 ;
while($count < 10){
    $result = mysqli_query($conn , "SELECT count(*) AS `total` from `allotted_room_detail` WHERE `Allotted_room` = '$count'");
    $data=mysqli_fetch_assoc($result);
    // echo $data['total'];
    $bookingstatus = "NO" ;
    $occupacy = 0 ;
    if($data['total'] == 2){
        // echo "success";
        $bookingstatus = "YES";
        $occupacy = 2 ;
    }
    else if($data['total'] == 1){
        // echo "failure";
        $bookingstatus ="YES" ;
        $occupacy = 1;
    }
    else {
        $bookingstatus = "NO" ;
        $occupacy = 0;
    }
    
    $result3 = mysqli_query($conn , "UPDATE `Room` SET `BookingStatus` = '$bookingstatus' , `Occupacy` = '$occupacy' WHERE `RoomID` = '$count'");
    $count = $count +1 ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Room </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
        .roomcontainer{
            /* border: 2px solid sred; */
    width : 80%;
    
        }

        .big_room_container{
            display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
    width : 70%;
    height : 70rem ;
        }
        .rooms_contain{
            height : 10rem;
        }
    </style>
</head>

<body>
    <div id="Admin_room_details">
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
                <li class="list_items"><a class="list_item_link" href="Delete_students.php"><i
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

                        <li class="list_items"><a class="list_item_link" href="complain.php"><i class="fa fa-exchange list_icon"></i>Show Complaints</a></li>
                <!-- <li class="list_items"><a class="list_item_link" href="attandance.php"><i
                            class="fa fa-registered list_icon"></i>Attendance</a></li> -->
                <!-- <li class="list_items"><a class="list_item_link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>LogOut</a></li> -->
            </ul>
        </div>
        <div class="big_room_container">
            <div id="rooms_information">
                <div class="card rooms_contain">
                    <div class="card-body">
                        <h4 class="card-title">Total Rooms</h4>
                        <p><?php  
                     $result4 = mysqli_query($conn , "SELECT count(*) AS `total` from `Room`");
                     $data1=mysqli_fetch_assoc($result4);
                     echo $data1['total'];
                    
                    ?></p>
                    </div>
                </div>
                <div class="card rooms_contain">
                    <div class="card-body">
                        <h4 class="card-title">Allotted Rooms</h4>
                        <p>
                            <?php 
                          $result5 = mysqli_query($conn , "SELECT count(*) AS `total` from `Room` WHERE `BookingStatus` = 'YES'");
                          $data2=mysqli_fetch_assoc($result5);
                          echo $data2['total'];
                        
                        ?>
                        </p>
                    </div>
                </div>
                <div class="card rooms_contain">
                    <div class="card-body">
                        <h4 class="card-title">Vacated Rooms</h4>
                        <p>
                            <?php 
                        echo $data1['total'] - $data2['total'];
                        ?>
                        </p>
                    </div>
                </div>


            </div>
            <div class="roomcontainer">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">SrNO</th>
      <th scope="col">Room Number</th>
      <th scope="col">Booking Status</th>
      <th scope="col">Occupacy</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $result6 = mysqli_query($conn , "SELECT * FROM `Room`");
      $rowresult6 = mysqli_num_rows($result6);
      $countroom = 1;
      if($rowresult6 > 0){
          while($rowroomdetails = mysqli_fetch_assoc($result6)){
              echo '<tr>
              <th scope="row">'.$countroom .'</th>
              <td>'.$rowroomdetails['RoomID'] .'</td>
              <td>'.$rowroomdetails['BookingStatus'] .'</td>
              <td>'.$rowroomdetails['Occupacy'].'</td>
            </tr>';
            $countroom = $countroom +1 ;
          }
      }
      ?>

   
    
  </tbody>
</table>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>