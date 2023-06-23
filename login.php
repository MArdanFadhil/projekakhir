<?php
    // cek apakah  button submit pernah ditekan atau belum
    if( isset($_POST["submit"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        // cek apakah user/pass itu benar?

        if( mysqli_num_rows($result) === 1 ){

            //check password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){
                header("Location: data.php");
                exit;
            }
        }
        $error = true;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="card.css">
    <style>
        body{
            background-image: url(img/kopi1.jpg);
            color: #BE6DB7;
            background-size: cover;
            
        }
        .title {
               margin: 90%;
               width: 100%;
               max-width: 400px;
               font-size: 4rem;
               text-align: center;
          }

          .card {
               width: 90%;
               max-width: 400px;
               padding: 5rem 2.5rem;

               border-radius: 1rem;
               border: 1px solid transparent;

               backdrop-filter: blur(1rem);
               box-shadow: 1.3rem 1.3rem 1.3rem rgba(0, 0, 0, 0.5);

               border-top-color: rgba(225, 225, 225, 0.1);
               border-left-color: rgba(225, 225, 225, 0.1);
               border-bottom-color: rgba(225, 225, 225, 0.1);
               border-right-color: rgba(225, 225, 225, 0.1);
          }

          .cb1 {
               background-color: rgba(225, 225, 225, 0.1);
          }
    </style>
</head>
<body>


    <div class="login">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="cb1 card" style="width: 25rem">
                        <div class="card-body">
                            <form action="" method="post">
                                <p>Form Login</p>
                                <?php if( isset($error) ) : ?>
                                    <p class="color">username/password salah</p>
                                <?php endif; ?> 
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Gas Click!</button>       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>