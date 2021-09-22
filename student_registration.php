

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$error_message_for_full_name = "";
$error_message_for_email = "";
$error_message_for_password = "";
$error_message_for_confirm_password = "";
$error_message_for_border_number = "";
$error_message_for_village_or_road_name = "";
$error_message_for_post_office = "";
$error_message_for_sub_district = "";
$error_message_for_district = "";

$valid_full_name = 0;
$valid_email = 0;
$valid_password = 0;
$valid_confirm_password = 0;
$valid_border_number = 0;
$valid_village_or_road_name = 0;
$valid_post_office_name = 0;
$valid_sub_district_name = 0;
$valid_district_name = 0;

if(isset($_POST['register'])){
    $student_full_name = $_POST['student_full_name'];
    $student_email = $_POST['student_email'];
    $student_password = $_POST['student_password'];
    $student_confirm_password = $_POST['student_confirm_password'];
    $border_number = $_POST['border_number'];
    $student_village_or_road_name = $_POST['village_or_road_name'];
    $student_post_office = $_POST['post_office'];
    $student_sub_district_name = $_POST['sub_district'];
    $student_district_name = $_POST['district'];

    //full name validation
    if(empty($student_full_name)){
        $error_message_for_full_name = "Enter Full Name";
    }
    if(!empty($student_full_name)){
        $student_full_name_validation = "/^[A-Z][a-zA-Z\.\s]+\s[A-Z][a-zA-Z\s]+$/";

        if(!preg_match($student_full_name_validation, $student_full_name)){
            $error_message_for_full_name = "Hints: Md. Kamrul Hasan";
        }
        else{
            $student_full_name = $_POST['student_full_name'];
            $valid_full_name = $valid_full_name + 1;
        }
    }

    //email validation
    if(empty($student_email)){
        $error_message_for_email = "Enter Email";
    }

    if(!empty($student_email)){
        $student_email_validation = "/^[a-zA-Z0-9-_\.]+@[a-zA-Z0-9-_\.]+\.[a-zA-Z0-9\.]{2,}+$/";

        if(!preg_match($student_email_validation, $student_email)){
            $error_message_for_email = "Hints: example@example.com";
        }
        else{
            $valid_email = $valid_email + 1;
        }
    }

    //Password validation
    if(empty($student_password)){
        $error_message_for_password = "Enter Password";
    }

    if(!empty($student_password)){
        $student_password_validation = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/";

        if(!preg_match($student_password_validation, $student_password)){
            $error_message_for_password = "password must be 8+ digits with Upper&Lower case letter and Number ";
        }
        else{
            $valid_password = $valid_password + 1;
        }
    }


    //Confirm Paswrod validation
    if(empty($student_confirm_password)){
        $error_message_for_confirm_password = "Enter Password";
    }

    if(!empty($student_confirm_password)){
        $student_confirm_password_validation = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/";

        if(!preg_match($student_confirm_password_validation, $student_confirm_password)){
            $error_message_for_confirm_password = "password must be 8+ digits with Upper&Lower case letter and Number ";
        }
        else{
            if($student_password != $student_confirm_password){
                $error_message_for_password = "Password did not match";
                $error_message_for_confirm_password = "Password did not match";
            }
            else{
                $valid_confirm_password = $valid_confirm_password + 1;
            }
        }
    }

    //full name validation
    if(empty($border_number)){
        $error_message_for_border_number = "Enter Your Border Number";
    }
    else{
        $border_number_validation = "/^[0-9]+$/";
    
        if(!preg_match($border_number_validation, $border_number)){
            $error_message_for_border_number = "Hints: 00000001";
        }
            
        else{
            $valid_border_number = $valid_border_number + 1;
        }
    }

    //village or road name validation
    if(empty($student_village_or_road_name)){
        $error_message_for_village_or_road_name = "Enter Village or Road Name";
    }
    if(!empty($student_village_or_road_name)){
        $student_village_or_road_name_validation = "/^[a-zA-Z\s]+[a-zA-Z\s0-9]+$/";

        if(!preg_match($student_village_or_road_name_validation, $student_village_or_road_name)){
            $error_message_for_village_or_road_name = "Hints: Moydandighi";
        }
        else{
            $student_village_or_road_name = $_POST['village_or_road_name'];
            $valid_village_or_road_name = $valid_village_or_road_name + 1;
        }
    }

    //post office name validation
    if(empty($student_post_office)){
        $error_message_for_post_office = "Enter Post Office Name";
    }
    if(!empty($student_post_office)){
        $student_post_office_validation = "/^[a-zA-Z\s]+[a-zA-Z\s]+$/";

        if(!preg_match($student_post_office_validation, $student_post_office)){
            $error_message_for_post_office = "Hints: Moydandighi";
        }
        else{
            $student_post_office = $_POST['post_office'];
            $valid_post_office_name = $valid_post_office_name + 1;
        }
    }

    //subdistrict name validation
    if(empty($student_sub_district_name)){
        $error_message_for_sub_district = "Enter Sub District Name";
    }
    if(!empty($student_sub_district_name)){
        $student_sub_district_name_validation = "/^[a-zA-Z\s]+[a-zA-Z\s]+$/";

        if(!preg_match($student_sub_district_name_validation, $student_sub_district_name)){
            $error_message_for_sub_district = "Hints: Bhangura";
        }
        else{
            $student_sub_district_name = $_POST['sub_district'];
            $valid_sub_district_name = $valid_sub_district_name + 1;
        }
    }

    //district name validation
    if(empty($student_district_name)){
        $error_message_for_district = "Enter District Name";
    }
    if(!empty($student_district_name)){
        $student_district_name_validation = "/^[a-zA-Z\s]+[a-zA-Z\s]+$/";

        if(!preg_match($student_district_name_validation, $student_district_name)){
            $error_message_for_district = "Hints: Pabna";
        }
        else{
            $student_district_name = $_POST['district'];
            $valid_district_name = $valid_district_name + 1;
        }
    }


    if($valid_full_name == 1 && $valid_email == 1 && $valid_password == 1 && $valid_confirm_password == 1 && $valid_border_number == 1 && $valid_village_or_road_name == 1 && $valid_post_office_name == 1 && $valid_sub_district_name == 1 && $valid_district_name == 1){
        
        // store the user data to database

        $connection = mysqli_connect("localhost","root","","bbsmrh");
        if ($connection === false){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{

            //check the user
            $check_student = "SELECT `student_full_name`, `student_email` FROM `tbl_student_registration` WHERE student_full_name = '$student_full_name' AND student_email = '$student_email'";
           
            $result_check_student = mysqli_query($connection, $check_student);
                
            $rowcount_check_student = mysqli_num_rows($result_check_student);
            
            if($rowcount_check_student > 0){
                echo "<h3 style='color: white;'>User Exists</h3>";
                echo "<h3 style='color: white;'> $student_full_name </h3>";
           }
           else{
                $insert_student_information = "INSERT INTO tbl_student_registration (student_full_name, student_email, student_password, student_border_number, village_or_road_name, post_office_name, sub_district_name, district_name) VALUES ('$student_full_name','$student_email','$student_password','$border_number', '$student_village_or_road_name', '$student_post_office', '$student_sub_district_name','$student_district_name')";
                if(mysqli_query($connection, $insert_student_information)){
                    echo "Inserted Successfully.";
                }
                else{
                    echo "Could not insert." .mysqli_error($connection);
                }

                $username = $_POST['student_full_name'];
                $email = $_POST['student_email'];
                $subject = "Account Verification";
                $message = "Dear student, please use the 6 digit number as the confirmation code and finish your registration process.<br> Your Verification code is ";
        
                // Generate Confirmation Code
                $verification_code = rand(100000, 900000);
                //Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'freelancerkamruul@gmail.com';                     //SMTP username
                    $mail->Password   = '**(kaamrul haasaan)**';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587; 
                    $mail->From = "freelancerkamruul@gmail.com";
                    $mail->FromName = "Kamrul Hasan";                                   //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
                    //Recipients
                    $mail->setFrom('freelancerkamruul@gmail.com', 'Kamrul Hasan');
                    $mail->addAddress($email, $username);     //Add a recipient            //Name is optional
                    $mail->addReplyTo('freelancerkamruul@gmail.com', 'Reply to Kamrul');
    
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = $subject;
                    $mail->Body    =  $verification_code;
                    $mail->AltBody = $message;
    
                    $mail->send();
                } 
                catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                } 

                //Connect to the databse
                $connection = mysqli_connect("localhost","root","","bbsmrh");
                if ($connection === false){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                else{

                    $insert = "INSERT INTO student_verification_code (verification_code) VALUES ($verification_code)";
            
                    if(mysqli_query($connection, $insert)){
                        echo "Verification Code Sent!";
                        header("location: account-confirmation.php");
                        exit;
                }

                else{
                    echo "Verification code is not sent!";
                }
        }
           }
            
        }
        
    }
}

?>




<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/student_registration.css">
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
            <button type="submit" class="btn-forgot-password" ><a href="Auth/login.php" style="text-decoration:none; color:#fff;">Login Now</a></button>
        </div>
    </form>

</body>

</html>
