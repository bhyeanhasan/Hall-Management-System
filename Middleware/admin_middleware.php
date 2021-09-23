<?php

if($_SESSION['role'] != 'admin')
{
    if($_SESSION['role'] == 'student')
    {
        header("location: navigation_menu.php");
    }
    elseif ($_SESSION['role'] == 'staff')
    {
        header("location: staff_panel.php");
    }
}

?>