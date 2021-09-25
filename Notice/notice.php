<?php
session_start();
include "../database_connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM notice WHERE id ='$id'";
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

<?php
if (mysqli_num_rows($result) > 0) {
    while ($notice = mysqli_fetch_assoc($result)) {
        ?>
        <div style="background-color: #dddddd;margin-bottom: 10px;padding: 20px">
            <h2><?php echo $notice['notice_sub'] ?></h2>
            <p><?php echo $notice['notice_time'] ?></p>
            <p><?php echo $notice['notice'] ?></p>
        </div>
        <?php

        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            ?>
            <a href="manage_notice.php?id=<?php echo $notice['id'] ?>">Manage Notice</a>
            <?php
        }
    }
}
?>


</body>
</html>
