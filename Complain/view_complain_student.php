<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/student_middleware.php';

$border = $_SESSION['id'];
$sql = "SELECT * FROM complain WHERE student_border_number='$border'";
$result = mysqli_query($connection, $sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <?php

    if (mysqli_num_rows($result) > 0) {
            while ($complain = mysqli_fetch_assoc($result)) {
    ?>      <a href="complain_student.php?id=<?php echo $complain['id'] ?>"><h2><?php echo $complain['complain_subject'] ?></h2></a>
            <p><?php echo $complain['complain_time'] ?></p>
            <p><?php echo $complain['complain'] ?></p>
            <p><?php echo $complain['complain_status'] ?></p>
    <?php
            }
        }
        else
        {
            echo "0 results";
        }
    ?>

</div>

</body>
</html>
