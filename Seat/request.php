<?php
session_start();
include "../database_connection.php";
include "../Middleware/middleware.php";
include "../Middleware/admin_middleware.php";

$id=$_GET['id'];

$sql = "SELECT * FROM seat WHERE student_border_number ='$id'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($request = mysqli_fetch_assoc($result)) {
        $name = $request['name'];
        $request_type = $request['request'];
    }
}

mysqli_close($connection);

if(isset($_POST['update']))
{
    include '../database_connection.php';

    $room = $_POST['room'];
    
    $sql = "UPDATE seat SET request='done',alloted_room='$room' WHERE student_border_number='$id'";

    if (mysqli_query($connection, $sql)) {
        header("location: all_seat_request.php");
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
    mysqli_close($connection);
}

if(isset($_POST['delete']))
{
    include '../database_connection.php';

    $sql = "DELETE FROM seat WHERE student_border_number='$id'";

    if (mysqli_query($connection, $sql)) {
        header("location: all_seat_request.php");
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

<h4>Student Name: <?php echo $name ?></h4>
<h5>Student Border: <?php echo $id ?></h5>
<h5>Request Type: <?php echo $request_type ?></h5>

<form action="" method="post">

    <div class="input-container">
        <input class="input-field" type="text"  name="room" placeholder="Allot Room">
    </div>

    <input value="Allot Seat" class="input-field" type="submit" name="update">
    <input value="DELETE" style="background-color: red" class="input-field" type="submit" name="delete">

</form>

</body>
</html>
