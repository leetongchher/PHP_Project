<?php
    session_start();
    if(isset($_POST['user'])){
        $u = $_POST['user'];
        $p = $_POST['pass'];

        if($u == "admin" && $p == "123"){
            $_SESSION['username'] = "System";
            header('refresh:0, URL=main.php');
        }else{
            echo"<h3 style='color:red;'>Login Faild...</h3>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Username: <input type="text" name="user"> <br>
    Password: <input type="password" name="pass"> <br>
    <input type="submit" value="Login">
</form>

    
</body>
</html>