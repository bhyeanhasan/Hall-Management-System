<?php
session_start();
include '../database_connection.php';
$error_message_for_email = "";
$error_message_for_password = "";
$valid_email = 0;
$valid_password = 0;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    //email validation
    if (empty($email)) {
        $error_message_for_email = "Enter Email";
    }

    if (!empty($email)) {
        $email_validation = "/^[a-zA-Z0-9-_\.]+@[a-zA-Z0-9-_\.]+\.[a-zA-Z0-9\.]{2,}+$/";

        if (!preg_match($email_validation, $email)) {
            $error_message_for_email = "Hints: example@example.com";
        } else {
            $valid_email = $valid_email + 1;
        }
    }

    //password validation
    if (empty($password)) {
        $error_message_for_password = "Enter Password";
    }

    if (!empty($password)) {
        $password_validation = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/";

        if (!preg_match($password_validation, $password)) {
            $error_message_for_password = "password must be 8+ digits with Upper&Lower case letter and Number ";
        } else {
            $valid_password = $valid_password + 1;
        }
    }

    if ($valid_email == 1 && $valid_password == 1) {

        if ($role == "admin") {
            $search_admin = "SELECT * FROM `table_admin` WHERE admin_email = '$email' AND admin_password = '$password'";
            $result_search_admin = mysqli_query($connection, $search_admin);

            $rowcount_search_admin = mysqli_num_rows($result_search_admin);

            if ($rowcount_search_admin > 0) {
                while($row = mysqli_fetch_assoc($result_search_admin)) {
                    $_SESSION['name'] = $row['admin_name'];
                    $_SESSION['role'] = "admin";
                    $_SESSION['id'] = $row['id'];
                }
                header("location: ../admin_panel.php");
                exit;
            } else {
                echo "Wrong Email or Password!";
            }
        }

        if ($role == "student") {
            $search_student = "SELECT * FROM `tbl_student_registration` WHERE student_email = '$email' AND student_password = '$password'";
            $result_search_student = mysqli_query($connection, $search_student);

            $rowcount_search_student = mysqli_num_rows($result_search_student);

            if ($rowcount_search_student > 0) {
                while($row = mysqli_fetch_assoc($result_search_student)) {
                    $_SESSION['name'] = $row['student_full_name'];
                    $_SESSION['role'] = "student";
                    $_SESSION['id'] = $row['student_border_number'];
                }
                header("location: ../navigation_menu.php");
                exit;
            } else {
                echo "error";
            }
        }
        if ($role == "staff") {
            $search_staff = "SELECT * FROM `table_staff` WHERE staff_email = '$email' AND staff_password = '$password'";
            $result_search_staff = mysqli_query($connection, $search_staff);

            $rowcount_search_staff = mysqli_num_rows($result_search_staff);

            if ($rowcount_search_staff > 0) {
                while($row = mysqli_fetch_assoc($result_search_staff)) {
                    $_SESSION['name'] = $row['staff_name'];
                    $_SESSION['role'] = "staff";
                    $_SESSION['id'] = $row['id'];
                }
                header("location: ../staff_panel.php");
                exit;
            } else {
                echo "Wrong Email or Password!";
            }
        }
    }


}


?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

<form action="" method="post">
    <h1 class="header-text">Bangabandhu Sheikh Mujibur Rahman Hall</h1>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_email; ?> </span>
    <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="email" placeholder="Email" name="email">
    </div>

    <span style="color: #fff; font-family: 'Reggae One', cursive; float:right;"> <?php echo $error_message_for_password; ?> </span>
    <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="password">
    </div>

    <div class="input-container">
        <i class="fa fa-arrow-circle-right icon"></i>
        <select name="role" id="role" class="input-field">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
            <option value="staff">Staff</option>
        </select>
    </div>

    <button type="submit" class="btn" name="login">Login</button>

    <div class="other-section">

        <button type="submit" class="btn-forgot-password">Forgot Password?</button>

        <a href="student_registration.php" type="submit" class="btn-register-now">Register Now</a>

    </div>
</form>

</body>

</html>
</body>

</html>