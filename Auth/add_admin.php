<?php
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/student_registration.css">
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <h1 class="header-text">Bangabandhu Sheikh Mujibur Rahman Hall</h1>


    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_full_name; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle icon"></i>
        <input class="input-field" type="text" placeholder="Full Name" name="student_full_name">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_email; ?> </span>
    <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="text" placeholder="Email" name="student_email">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_password; ?> </span>
    <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="student_password">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_confirm_password; ?> </span>
    <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Confirm Password" name="student_confirm_password">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_border_number; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle-o icon"></i>
        <input class="input-field" type="text" placeholder="Border Number" name="border_number">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_village_or_road_name; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle-o icon"></i>
        <input class="input-field" type="text" placeholder="Village Or Road Name" name="village_or_road_name">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_post_office; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle-o icon"></i>
        <input class="input-field" type="text" placeholder="Poast Office" name="post_office">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_sub_district; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle-o icon"></i>
        <input class="input-field" type="text" placeholder="Sub District" name="sub_district">
    </div>
    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_district; ?> </span>
    <div class="input-container">
        <i class="fa fa-user-circle-o icon"></i>
        <input class="input-field" type="text" placeholder="District" name="district">
    </div>

    <button type="submit" class="btn" name="register">Register</button>

    <div class="other-section">
        <button type="submit" class="btn-forgot-password" ><a href="login.php" style="text-decoration:none; color:#fff;">Login Now</a></button>
    </div>

</form>

</body>

</html>
