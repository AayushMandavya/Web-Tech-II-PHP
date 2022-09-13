
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

        //DATABASE CONNECTION   
        $conn= new mysqli("localhost","root","","login_auth");

        if($conn->connect_error) {
            die("$conn->connect_error");
        }
        echo " SQL Connection Success";

        $sql="SELECT * FROM user WHERE email='$email'";
        $result=$conn->query($sql);
        echo"<pre>";
        print_r($result);
        echo "</pre>";

        $row=$result->fetch_assoc();
        print_r($row);
        echo"<br>";
        echo "Your ID is: ". $row["id"];
        echo"<br>";
        echo "Your Name is: ". $row["name"];
        echo"<br>";
        echo "Your email is: ". $row["email"];
        echo"<br>";
        echo "Your password is: ". $row["password"];
        echo"<br>";

        $db_emai=$row["email"];
        $db_password=$row["password"];

        if($password===$db_password){
            echo "login success";
        }
        else{
            echo "wrong details";
        }
    }
       ?>
</body>
</html>
