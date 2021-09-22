<?php

    include 'database_connection.php';
    
    $verification_code = rand(100000, 900000);
    $insert = "INSERT INTO student_verification_code (verification_code) VALUES ($verification_code)";

    if(mysqli_query($connection, $insert)){
        echo "Verification Code Inserted Successfully";
    }

    else{
        echo "Could not insert!";
    }

    /*$insert = "INSERT INTO tbl_student_registration (student_full_name, student_email, student_password, student_border_number, student_verification_code) VALUES (
        '', '', '', '', $verification_code 
    )";

    if(mysqli_query($connection, $insert)){
        echo "Verification Code Inserted Successfully";
    }

    else{
        echo "Could not insert!";
    }*/

?>