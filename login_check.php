<?php
     require "connection.php";
    $password = $_POST['password'];
    $email = $_POST['email'];

     // This looks vulnerable to SQL injection. For example, attacker can submit an email="fake@gmail.com'; DROP TABLE Users; -- ".
     // This can be prevented by using prepared statements.
     // You can read about it here: https://www.w3schools.com/php/php_mysql_prepared_statements.asp 

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
     //This block is empty. If the intension is to fill this out later, it is better if you leave a TODO comment. https://www.jetbrains.com/help/phpstorm/using-todo.html
        	}
        	else{
                echo '<script>alert("Incorrect Email or Password ");</script>';

        	}
    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
    // User exists, redirect to another page
        header("Location: sell_page.php");
        exit();
    }
    else{
        echo '<script>alert("Incorrect Email or Password ");</script>';
        include "login.php";
    }


?>
