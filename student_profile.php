<?php

    $student_full_name = "";
    $student_email = "";
    $student_border_number = "";
    $student_village_or_road_name = "";
    $student_post_office_name = "";
    $student_sub_district_name = "";
    $student_district_name = "";



    $connection = mysqli_connect("localhost","root","","bbsmrh");

    if ($connection === false){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        $sql = "SELECT * FROM tbl_student_registration "; 
        $result = mysqli_query($connection, $sql);
    }

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/student_profile.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#bbsmrh" class="active">BBSMRH</a>
  <a href="#profile">Profile</a>
  <div class="dropdown">
    <button class="dropbtn">Seat 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Manage Seat Request</a>
      <a href="#">Manage Seat Cancellation</a>
    </div>
  </div> 
  <a href="#stypend">Give Stypend</a>
  <a href="#notice">Send Notice</a>
  <a href="#add_admin">Add Admin</a>
  <a href="#add_staff">Add Staff</a>
  <a href="#setting">Settings</a>
  <a href="#logout">Log Out</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="student-dashboard">
    <table class="student-profile-table">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Border Number</th>
            <th>Village or Road Name</th>
            <th>Post Office</th>
            <th>Sub District</th>
            <th>District</th>
        </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
        <tr>
            <td><?php echo $rows['student_full_name'];?></td>
            <td><?php echo $rows['student_email']; ?></td>
            <td><?php echo $rows['student_border_number']; ?></td>
            <td><?php echo $rows['village_or_road_name']; ?></td>
            <td><?php echo $rows['post_office_name']; ?></td>
            <td><?php echo $rows['sub_district_name']; ?></td>
            <td><?php echo $rows['district_name']; ?></td>
        </tr>
            <?php 
                } 
             ?> 
    </table>
</div>

<script src="js/navigation_menu.js"></script>

</body>
</html>