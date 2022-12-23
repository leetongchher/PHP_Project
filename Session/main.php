<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('refresh:0,URL=s-login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">

    <title>Document</title>
    <style>
        h1, h4{
            text-align: center;
            padding-top: 2%;
            font-family: Poppins;

        }
        a{
            text-decoration: none;
            color: red;
            font-family: Poppins;
            float: right;
            padding-right: 20px;
            
        }
        a:hover{
            color: green;
        }
    </style>
</head>
<body>
<a href="logout.php">Logout</a>
    <h1><?php echo $_SESSION['username']?></h1>
    <h4>HELLO AVATAR THE WAY OF WATER</h4>
</body>
</html>