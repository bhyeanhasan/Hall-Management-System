<?php

if (!isset($_SESSION['name'])) {
    die(header("location: index.php"));
}

?>