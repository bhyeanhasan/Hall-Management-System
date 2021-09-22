<?php
    // host name, database username, password, and database name.
    // if the database password is set then put the password
    // If the database password is not set on localhost then put empty.
    $connection = mysqli_connect("localhost","root","","bbsmrh");
    // Check connection
    if ($connection === false){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>