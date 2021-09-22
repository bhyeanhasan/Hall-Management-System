<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/navigation_menu.css">
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="#bbsmrh" class="active">BBSMRH</a>
    <?php
    if (isset($_SESSION['name']))
    {
    ?>
        <a href="#profile"><?php echo $_SESSION['name'] ?></a>
    <?php } ?>
    <div class="dropdown">
        <button class="dropbtn">Seat
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Request Seat</a>
            <a href="#">Cancel Seat</a>
        </div>
    </div>
    <a href="#stypend">Stypend</a>
    <a href="#notice">Notice</a>

    <a href="#setting">Settings</a>
    <a href="Auth/logout.php">Log Out</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="student-dashboard">
    <form action="" method="post">
        <h1 class="header-text">Bangabandhu Sheikh Mujibur Rahman Hall</h1>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="email" placeholder="<?php $email ?>" name="email">
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
        </div>

        <div class="input-container">
            <i class="fa fa-user-circle-o icon"></i>
            <input class="input-field" type="text" placeholder="Border Number" name="psw">
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="other-section">
            <button type="submit" class="btn-forgot-password">Forgot Password?</button>

            <button type="submit" class="btn-register-now">Register Now</button>
        </div>
    </form>
</div>

<script src="js/navigation_menu.js"></script>

</body>
</html>