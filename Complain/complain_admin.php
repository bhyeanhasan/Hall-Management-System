<?php
session_start();
include "../database_connection.php";
include "../Middleware/middleware.php";
include "../Middleware/admin_middleware.php";

$id=$_GET['id'];
$sql = "SELECT * FROM complain WHERE id ='$id'";
$result = mysqli_query($connection, $sql);

mysqli_close($connection);

if(isset($_POST['status_btn']))
{
    include '../database_connection.php';
    $status = $_POST['status'];

    if($status=="approved" || $status == "solved")
    {
        $sql = "UPDATE complain SET complain_status='$status' WHERE id='$id'";

        if (mysqli_query($connection, $sql)) {
            header("location: view_complain_admin.php");
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }

    }
    else{
        $sql = "DELETE FROM complain WHERE id='$id'";

        if (mysqli_query($connection, $sql)) {
            header("location: view_complain_admin.php");
        } else {
            echo "Error deleting record: " . mysqli_error($connection);
        }
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
    <title>Document</title>
</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($complain = mysqli_fetch_assoc($result)) {
        ?>
        <div style="background-color: #dddddd;margin-bottom: 10px;padding: 20px">
            <a href="complain_admin.php?id=<?php echo $complain['id'] ?>"><h2><?php echo $complain['complain_subject'] ?></h2></a>
            <p><?php echo $complain['student_name'] ?></p>
            <p><?php echo $complain['student_border_number'] ?></p>
            <p><?php echo $complain['complain_time'] ?></p>
            <p><?php echo $complain['complain'] ?></p>
            <p><?php echo $complain['complain_status'] ?></p>
        </div>
        <?php
    }
}
?>

    <form action="" method="post">

        <div class="input-container">
            <select name="status" class="input-field">
                <option value="approved">Approved</option>
                <option value="solved">Solved</option>
                <option value="deleted">Deleted</option>
            </select>
        </div>

        <input type="submit" name="status_btn">

    </form>

</body>
</html>
