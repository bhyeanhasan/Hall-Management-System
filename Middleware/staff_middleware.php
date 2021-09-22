<?php
if($_SESSION['role'] != 'staff')
{
    if($_SESSION['role'] == 'admin')
    {
        header("location: admin_panel.php");
    }
    elseif ($_SESSION['role'] == 'student')
    {
        header("location: navigation_menu.php");
    }
}
?>