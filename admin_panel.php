<?php
session_start();
include 'database_connection.php';
include 'Middleware/middleware.php';
include 'Middleware/admin_middleware.php';

$sql = "SELECT * FROM complain";
$result = mysqli_query($connection, $sql);
$complain_count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">BBSMRH</a>

    <div class="dropdown">
        <button class="dropbtn">Seat
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Seat/all_seat_request.php">Manage Seat Request</a>
            <a href="Seat/allotted_seats.php">Allotted Seats</a>
        </div>
    </div>
    <a href="#stypend">Approve Stypend</a>
    <a href="Notice/add_notice.php">Send Notice</a>
    <a href="Notice/view_notice.php">View Notice</a>
    <a href="Complain/view_complain_admin.php">Complain <sub style="color: yellow;font-weight: bold"><?php echo $complain_count ?></sub></a>

    <?php
    if (isset($_SESSION['name'])) {
        ?>
        <a style="float: right" href="Auth/logout.php">Log Out</a>

        <a style="float: right" href="#profile"><?php echo $_SESSION['name'] ?></a>

        <?php
    }
    else{

        ?>
        <a style="float: right" href="Auth/login.php">Log In</a>
        <?php
    }
    ?>

    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script src="js/navigation_menu.js"></script>

</body>
</html>