<?php
    if($_SESSION['role'] != 'student')
    {
        if($_SESSION['role'] == 'admin')
        {
            header("location: admin_panel.php");
        }
        elseif ($_SESSION['role'] == 'staff')
        {
            header("location: staff_panel.php");
        }
    }
?>