

<?php

$error_message_for_confirmation_code = "";

if(isset($_POST['submit'])){
    $confirmation_code = $_POST['confirmation-code'];
    if(!empty($confirmation_code)){ 
        $confirmation_code_validation = "/^[0-9][0-9][0-9][0-9][0-9][0-9]$/";

        if(!preg_match($confirmation_code_validation, $confirmation_code)){
            $error_message_for_confirmation_code = "Confirmation Number Must be 6 digit integer number";
        }
        else{
            //connect to the database and search the verification code in the student table
            $connection = mysqli_connect("localhost","root","","bbsmrh");
            if ($connection === false){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            else{
                $search_verification_code = "SELECT * FROM `student_verification_code` WHERE verification_code = $confirmation_code";
                $result= mysqli_query($connection, $search_verification_code);
                
                $rowcount=mysqli_num_rows($result);

                if($rowcount > 0){
                    $delete_code = "DELETE FROM `student_verification_code` WHERE verification_code = $confirmation_code";
                    $delete_result = mysqli_query($connection, $delete_code);

                    //insert data into database
                    $insert_student_information = "INSERT INTO `tbl_student_registration`(`student_full_name`, `student_email`, `student_password`, `student_border_number`) 
                                                        VALUES ([$student_full_name],[$student_email],[$student_password],[$border_number])";

                    $insert_result = mysqli_query($connection, $insert_student_information);

                    header("location: navigation_menu.php");
                    exit;
                }
                else{
                    $error_message_for_confirmation_code = "Please enter the right confirmation code.";
                }
            }

        }
    }
    else{
        $error_message_for_confirmation_code = "Enter the 6 digit confirmation code!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangabandhu Sheikh Mujibur Rahman Hall | Email Confirmation </title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/email-confirmation.css">
</head>
<body>
  

<div class="student-dashboard">
<form method="post">
        <h1 class="header-text">Bangabandhu Sheikh Mujibur Rahman Hall</h1>
        <h3 class="instruction">Please Check Your Email and submit the 6 digit confirmation code below to verify your account.</h3>

        <span style="color: #fff; font-family: 'Monsterrat'; float:right; margin-top: 4%"> <?php echo $error_message_for_confirmation_code; ?> </span>
        <div class="input-container">
            <i class="fa fa-check-circle-o icon"></i>
            <input class="input-field" type="text" placeholder="Confirmation Code" name="confirmation-code">
        </div>

        <button type="submit" class="btn" name="submit">Submit</button>

    </form>
</div>
</body>
</html>


