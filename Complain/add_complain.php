<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/student_middleware.php';

if(isset($_POST['complain'])){
    $name = $_SESSION['name'];
    $border_number = $_SESSION['id'];
    $complain_subject = $_POST['complain_subject'];
    $complain_body = $_POST['complain_body'];

    $sql = "INSERT INTO complain
                    (student_border_number, 
                     student_name, 
                     complain_subject, 
                     complain) 
             VALUES ('$border_number',
                     '$name',
                     '$complain_subject',
                     '$complain_body')";

    if(mysqli_query($connection, $sql)){
        echo "Inserted Successfully.";
    }
    else{
        echo "Could not insert." .mysqli_error($connection);
    }

    mysqli_close($connection);

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/student_registration.css">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <div class="input-container">
    <input class="input-field" name="complain_subject" type="text" placeholder="Complain Subject" required>
    </div>
    <div class="input-container">
    <input style="height: 300px" class="input-field" name="complain_body" type="text" placeholder="Complain Body" required>
    </div>
    <input class="input-field" name ="complain" type="submit">
</form>

</body>
</html>
