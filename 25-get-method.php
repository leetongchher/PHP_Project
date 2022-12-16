<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        ID: <input type="hidden" value="1" name="u"><br>
        Text: <textarea name="t" id="" cols="30" rows="2"></textarea><br>
        <input type="submit" value = "GET">
    </form>
    <?php
    if (isset($_GET['u'])) {
        $id = $_GET['u'];
        $txt = $_GET['t'];
        echo "ID: ".$id."<br>";
        echo "Text: ".$txt;
    }
    ?>
</body>
</html>