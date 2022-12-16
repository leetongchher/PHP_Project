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
        Username: <input type="text" name="u"><br>
        Password: <input type="password" name="p"><br>
        <input type="submit" value = "POST">
    </form>
    <?php
    if (isset($_POST['u'])) {
        $user = $_POST['u'];
        $pass = $_POST['p'];
        echo "Username: ".$user."<br>";
        echo "Password: ".$pass;

    }
    ?>
</body>
</html>