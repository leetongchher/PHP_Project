<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Testing</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        Title: <input type="text" name="t" id="">
        Content: <textarea name="con" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="" id="" value="Save">
    </form>
    <?php
        if(isset($_POST['t'])){
            $title = $_POST["t"];
            $content = $_POST["con"];
            echo "<h1>". $title."</h1>";
            echo "<p>". $content."</p>";
        }
    ?>
</body>
</html>