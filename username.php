

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    
        <input type="text" name="username">

        <input type="submit" name="submit" value="Login">

    
    </form>
</body>
</html>


<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];

    if(!empty($username)){
        $regex = "/^[A-Z][a-zA-Z\.\s]+\s[A-Z][a-zA-Z\s]+$/";

        if(preg_match($regex, $username)){
            echo "Hello " .$username;
        }
        else{
            echo "Type your Full name i. e 'Md. Kamrul Hasan' or 'Kamrul Hasan' ";
        }
    }

    else{
        echo "Enter your full name.";
    }
}

?>