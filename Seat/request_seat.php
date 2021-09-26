<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/student_middleware.php';

$student_border_number = $_SESSION['id'];

$sql = "SELECT * FROM tbl_student_registration WHERE student_border_number= '$student_border_number'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
        $name = $row['student_full_name'];
    }
}

mysqli_close($connection);

include '../database_connection.php';


$sql = "INSERT INTO seat
                    (student_border_number, 
                     name) 
             VALUES ('$student_border_number',
                     '$name')";

if(mysqli_query($connection, $sql)){
    echo "Inserted Successfully.";
}
else{
    echo "Your request is in process";
}

mysqli_close($connection);


include '../database_connection.php';

$sql = "SELECT * FROM seat WHERE student_border_number ='$student_border_number'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($request = mysqli_fetch_assoc($result)) {
        $room = $request['alloted_room'];
    }
}
if($room=="")
{
    $room='Pending';
}

echo "<h2>Your alloted room NO: ".$room."</h2>";

mysqli_close($connection);

?>


