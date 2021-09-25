<?php
session_start();
include "../database_connection.php";
include "../Middleware/middleware.php";
include "../Middleware/admin_middleware.php";

$id=$_GET['id'];
$sql = "SELECT * FROM notice WHERE id ='$id'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($notice = mysqli_fetch_assoc($result)) {
        $sub = $notice['notice_sub'];
        $body = $notice['notice'];
    }
}

mysqli_close($connection);

if(isset($_POST['update']))
{
    include '../database_connection.php';

    $subject = $_POST['subject'];
    $body_new = $_POST['body'];


    $sql = "UPDATE notice SET notice_sub='$subject',notice='$body_new' WHERE id='$id'";

    if (mysqli_query($connection, $sql)) {
        header("location: view_notice.php");
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }

    mysqli_close($connection);

}

if(isset($_POST['delete']))
{
    include '../database_connection.php';

    $sql = "DELETE FROM notice WHERE id='$id'";

    if (mysqli_query($connection, $sql)) {
        header("location: view_notice.php");
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin_panel.css">

    <title>Document</title>
</head>
<body>

<form action="" method="post">

    <div class="input-container">
        <input class="input-field" type="text"  name="subject" value="<?php echo $sub ?>">
    </div>

    <div class="input-container">
        <textarea class="input-field"   name="body" ><?php echo $body ?></textarea>
    </div>

    <input value="Update" class="input-field" type="submit" name="update">
    <input value="DELETE" style="background-color: red" class="input-field" type="submit" name="delete">

</form>

</body>
</html>
