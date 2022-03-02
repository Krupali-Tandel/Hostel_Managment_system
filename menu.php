<?php 
 include 'partials/dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Menu</title>
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
        .menu_table{
            width : 80%;
        }
        .menu_container {
        
            display : flex;
            flex-direction : column;
            justify_content : center ;
            align-items : center ;
            margin-top:150px ;
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
    <div class="menu_container">
        <h1>Mess Menu</h1>
    <table class = "menu_table" border="2" height="100%" width="100%" >
 <tr>
     <th>DAY </th>
    <th>BREAKFAST </th>
    <th>LUNCH </th>
    <th>Afternoon_Snacks </th>
    <th> Dinner </th>
</tr>

<tr>
    <td>Monday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li> Bread,Butter,Jam </li>
                <li>Poha,sujji-Halwa</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Mix veg  </li>
            <li> Roti   </li>
                <li>Rice </li>
                    <li>Dal-Makhni</li>
                        
                             <li>Salad</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Sabji </li>
             <li>Dal</li>
             <li>Salad</li>
        </ul>
      
    </td>
</tr>

<tr>
    <td>Tueday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li> Bread,Butter,Jam </li>
                <li>Dosa,Sambhar,coconut-chutni</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Sabji  </li>
            <li> Roti   </li>
            <li>Moong-Dal</li>
            <li>Salad</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Sabji </li>
             <li>Dal</li>
             <li>Salad</li>
        </ul>
      
    </td>
    </tr>
    <tr>

    <td>Wednesday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li> Bread,Butter,Jam </li>
                <li>Poha</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Aloo-Prathe, Curd  </li>
            <li>Salad</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Sabji </li>
             <li>Dal</li>
             <li>Rice</li>
        </ul>
      
    </td>
</tr>

    <tr>

    <td>Thrusday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li> Bread,Butter,Jam </li>
                <li>Poha</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Punjabi dal, Roti  </li>
            <li>Salad</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Sabji </li>
            
        </ul>
      
    </td>
</tr>
<tr>
    <td>Friday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
         <li>Handva</li>
               
            </ul>
    </td>

    <td>
        <ul>
            <li>Dosa,Sambhar  </li>
           
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Sabji </li>
             <li>Dal</li>
             <li>Rice</li>
        </ul>
      
    </td>
</tr>

<tr>

    <td>Saturday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li> Bread,Butter,Jam </li>
                <li>Poha,Jalebi</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Chole-Bhturra , kulche </li>
          <li>Jeera Aloo</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> Roti   </li>
            <li>Paneer-Sabji </li>
             
        </ul>
      
    </td>
</tr>

<tr>
    <td>Sunday</td>
    <td>
        <ul> 
            <li>Tea,Milk</li>
            <li>Sandwich </li>
                <li>Poha, Khakra,Ras-gulle</li>
            </ul>
    </td>

    <td>
        <ul>
            <li>Tanduri roti, punjabi dal  </li>
            <li>Jeera-Rice</li>
            <li>Salad</li>
        </ul>
    </td>

    <td>
        <ul>
            <li>Juice  </li>
            <li> Fruits   </li>
        </ul>
    </td>

    <td>
        <ul>
            <li> kadi,Khichdi   </li>
            <li>Sabji </li>
             <li>Roti</li>
            
        </ul>
      
    </td>
</tr>
    
</table>

    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>