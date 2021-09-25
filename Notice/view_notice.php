<?php
session_start();
include '../database_connection.php';

$sql = "SELECT * FROM notice";
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
            while ($notice = mysqli_fetch_assoc($result)) {
    ?>      <a href="notice.php?id=<?php echo $notice['id'] ?>"><h2><?php echo $notice['notice_sub'] ?></h2></a>
            <p><?php echo $notice['notice_time'] ?></p>
            <p><?php echo $notice['notice'] ?></p>
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
