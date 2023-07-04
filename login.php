<?php 

session_start();

if(isset($_POST["login"])){
    
    $user = $_POST["username"];
    $pass = $_POST["password"];


    if($user == 'admin'){
        if($pass == '123456'){
            $_SESSION["login"] = true ;
            header('Location:index.php');
            exit;
        }
        $errorpass = true; 
    } 
    $erroruser = true; 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <div>
        <form action="" method="post">
            <label for="username">Username (admin)</label> <br>
            <input type="text" id="username" name="username"> <br><br>
            <label for="username">Pasword (123456)</label> <br>
            <input type="text" id="password" name="password"> <br> <br>
            <button type="submit" name="login">Login</button>
        </form>

        <?php if(isset($erroruser)) : ?>

        <p>Username Salah</p>

        <?php endif ?>

        <?php if(isset($errorpass)) : ?>

        <p>Password Salah</p>

        <?php endif ?>

    </div>
</body>

</html>