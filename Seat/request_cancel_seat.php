<?php
session_start();
include '../database_connection.php';
include '../Middleware/middleware.php';
include '../Middleware/student_middleware.php';

$student_border_number = $_SESSION['id'];

$sql = "UPDATE seat SET request='cancel_seat' WHERE student_border_number='$student_border_number'";

if(mysqli_query($connection, $sql)){
    echo "Cancel Request has sent Successfully.";
}
else{
    echo "Seat Canceled";
}
mysqli_close($connection);
?>