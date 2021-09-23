<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/admin_middleware.php';

$border = $_SESSION['id'];
$sql = "SELECT * FROM complain";
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
            ?>

            <div>
                <?php
                if($complain['complain_status']== 'pending')
                {?>
                    <div style="background-color: red;margin-bottom: 10px;padding: 20px">
                        <a href="complain_admin.php?id=<?php echo $complain['id'] ?>"><h2><?php echo $complain['complain_subject'] ?></h2></a>
                        <p><?php echo $complain['student_name'] ?></p>
                        <p><?php echo $complain['student_border_number'] ?></p>
                        <p><?php echo $complain['complain_time'] ?></p>
                        <p><?php echo $complain['complain'] ?></p>
                        <p><?php echo $complain['complain_status'] ?></p>
                    </div>
                <?php
                }
                elseif ($complain['complain_status']== 'approved'){
                    ?>
                <div style="background-color: blue;margin-bottom: 10px;padding: 20px">
                    <a href="complain_admin.php?id=<?php echo $complain['id'] ?>"><h2><?php echo $complain['complain_subject'] ?></h2></a>
                    <p><?php echo $complain['student_name'] ?></p>
                    <p><?php echo $complain['student_border_number'] ?></p>
                    <p><?php echo $complain['complain_time'] ?></p>
                    <p><?php echo $complain['complain'] ?></p>
                    <p><?php echo $complain['complain_status'] ?></p>
                </div>
                <?php } else { ?>
                    <div style="background-color: green;margin-bottom: 10px;padding: 20px">
                        <a href="complain_admin.php?id=<?php echo $complain['id'] ?>"><h2><?php echo $complain['complain_subject'] ?></h2></a>
                        <p><?php echo $complain['student_name'] ?></p>
                        <p><?php echo $complain['student_border_number'] ?></p>
                        <p><?php echo $complain['complain_time'] ?></p>
                        <p><?php echo $complain['complain'] ?></p>
                        <p><?php echo $complain['complain_status'] ?></p>
                    </div>
                <?php

                }
                ?>

            </div>
            <div style="width: 30%;float: right">

            </div>
            <div style="width: 30%;float: right">

            </div>


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
