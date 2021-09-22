<?php
session_start();
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
    <a href="#stypend">Notice</a>

    <div class="dropdown">
        <button class="dropbtn">Administration
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Provost</a>
            <a href="#">Staff</a>
        </div>
    </div>

    <a href="#notice">Student</a>
    <a href="#notice">Contacts</a>


    <?php
    if (isset($_SESSION['name'])) {
        ?>
        <a style="float: right" href="Auth/logout.php">Log Out</a>
        <a style="float: right" href="admin_panel.php"><?php echo $_SESSION['name'] ?></a>

    <?php
    }
    else
    {
    ?>
        <a style="float: right" href="Auth/login.php">Log In</a>
        <a style="float: right" href="Auth/student_registration.php">Register</a>
        <?php
    }
    ?>

    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="student-dashboard">
    <form action="" method="post">
        <h1 class="header-text">Bangabandhu Sheikh Mujibur Rahman Hall</h1>
    </form>
</div>

<script src="js/navigation_menu.js"></script>

</body>
</html>