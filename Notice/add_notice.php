<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/admin_middleware.php';

if(isset($_POST['notice'])){

    $notice_by = $_SESSION['id'];
    $notice_sub = $_POST['notice_sub'];
    $notice_body = $_POST['notice_body'];

    $sql = "INSERT INTO notice
                    (notice_by, 
                     notice_sub, 
                     notice) 
             VALUES ('$notice_by',
                     '$notice_sub',
                     '$notice_body')";

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
    <input class="input-field" name="notice_sub" type="text" placeholder="Notice Subject" required>
    </div>
    <div class="input-container">
        <textarea  style="height: 300px" class="input-field" name="notice_body"  placeholder="NOTICE" required></textarea>
    </div>
    <input class="input-field" name ="notice" type="submit">
</form>

</body>
</html>
