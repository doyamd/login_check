
<?php
     require "connection.php";
    $password = $_POST['password'];
    $email = $_POST['email'];


    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         
        		
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
