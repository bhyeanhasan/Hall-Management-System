<?PHP

    include 'database_connection.php';

    $create_table = "CREATE TABLE student_verification_code(
        verification_code INT NOT NULL
    )";

    if(mysqli_query($connection, $create_table)){
        echo "Table Created Successfully!";
    }
    else{
        echo "ERROR: Could not able to execute $create_table ." . mysqli_error($connection);
    }

?>