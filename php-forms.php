<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Login</button>
    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $email =$_POST['email'];
    $password=$_POST['password'];
    echo "<pre>";    
    print_r($_POST);
    echo "</pre>";
        echo "your email is : " .$email . "<br>";
        echo "your password is : " .$password . "<br>";
    }
       ?>
</body>
</html>