<?php

    $conn = mysqli_connect("localhost", "root", "", "db_cafe");

    function query ($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while ($baju = mysqli_fetch_assoc($result)) {
            $wadah[] = $baju;
        }
        return $wadah;
    }


    function register($data){
        global $conn;

        $username = strtolower(stripslashes($data['username']));
        $password = $data['password'];
        $conf_password = $data['conf_password'];

        if( $password !== $conf_password ){
            echo"
            <script>
                alert('passowrd tidak sesuai');
            </script>
    
            ";
            return false;
        }
    
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO users VALUES
    
        ('','$username','$password')
        ";

        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
    }

    

?>
