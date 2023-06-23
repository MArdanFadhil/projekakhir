<?php
    require 'controller.php';
    
    if( isset($_POST["submit"]) ){
        if( register($_POST) > 0 ){
            echo "
                <script>
                    alert('register berhasil');
                    document.location.href = 'index.php';
                </script>
                ";
        }else{
            echo mysqli_error($conn);
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
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
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="cb1 card" style="width: 25rem">
                    <div class="card-body">
                        <ul>
                            <form action="" method="post">
                                <div class="table">
                                        <li>
                                            <label for="">username</label>
                                            <input type="text" name="username" id="" autocomplete="0">
                                        </li>
                                        <li>
                                            <label for="">password</label>
                                            <input type="password" name="password" id="">
                                        </li>
                                        <li>  
                                            <label for="">konfirmasi password</label>
                                            <input type="password" name="conf_password" id="">
                                        </li>
                                            <button type="submit" name="submit">register</button>
                                </div>
                            </form>
                        </ul>
                     </div>
                </div>
            </div>   
        </div>
</body>
</html>