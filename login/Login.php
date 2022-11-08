<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php 
    // connect data base
    $conn = mysqli_connect("localhost","root","","kelompok");
    

    // Cek gmail dan password
    if(isset ($_POST["login"]) ){

        $gmail_user = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn," SELECT * FROM login WHERE email = '$gmail_user' ");

        if( mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password,$row["password"]) ){
                header("Location: index.php");
                exit();
            }

        }

        $error = true;
    }


?>
<form action="" method="post">
        <h1>Login</h1>
        <div class="email">
            <h6>Email</h6>
            <input type="email" name="email" id="">
        </div>
        <div class="pass">
        <h6>Password</h6>
            <input type="password" name="password" id="">
         <img src="./icons8-lock-32.png" alt="">
        </div>

        <button type="submit" name="login">
            Kirim
        </button>
</body>
</html>