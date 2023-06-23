<?php

    require 'controller.php';

    if( isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek = mysqli_query( $conn, "SELECT * FROM users WHERE username = '$username'");

        if( mysqli_num_rows($cek) === 1){

            $row = mysqli_fetch_assoc($cek);

            if( password_verify( $password, $row['password'] ) ){
                header("Location : index.php");
                exit;
            }
        }else{
            $error = true;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    
    <ul>
        <form action="" method="post"></form>
            <li>
                <label for="">username</label>
                <input type="text">
            </li>
            <li>
                <label for="">password</label>
                <input type="password">
            </li>
        <button type="submit" name="submit">Login</button>
    </ul>


</body>
</html>