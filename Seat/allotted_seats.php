<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/admin_middleware.php';

$sql = "SELECT * FROM seat";
$result = mysqli_query($connection, $sql);

mysqli_close($connection);

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
        while ($request = mysqli_fetch_assoc($result)) {

            if($request['request']=='done')
            {
                ?>

                <div style="background-color: blue">

                    <p>Allotted Room: <?php echo $request['alloted_room'] ?></p>
                    <a href="request.php?id=<?php echo $request['student_border_number'] ?>"><h2><?php echo $request['name'] ?></h2></a>
                    <p><?php echo $request['student_border_number'] ?></p>

                </div>

                <?php
            }
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
