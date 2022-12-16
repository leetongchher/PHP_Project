<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tbl{
        border:1px solid gray;
        width: 800px;
        border-collapse: collapse;
        }
        td{
        width: 100px;
        height: 50px;
        border:1px solid gray;
        }
        .a{
            background-color: #EFCBCB;
        }
        .b{
            background-color: lightgray;
        }
    </style>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>Number of Rows: </td>
            <td><input type="number" name= "row"></td>
        </tr>
        <tr>
            <td>Number of Colunms: </td>
            <td><input type="number" name="col"></td>
        </tr>
        <tr>
            <td colspan = "2"><input type = "submit" value = "Submit"></td>
        </tr>
    </table>
    
</form>
</body>
</html>

<?php
    $r = $_POST["row"];
    $c = $_POST["col"];
    settype($r,"integer");
    settype($c,"integer");
    var_dump($r);
    var_dump($c);
    echo "<table class = 'tbl'>";
    for ($i=1; $i <= $r; $i++){
        echo "<tr class= 'a'>";
        if ($i % 2 == 0) {
            for ($j=1; $j <= $c; $j++){ 
                echo "<td></td>";
            } 
            echo "</tr>";
        }else{
            echo "<tr class= 'b'>";
            for ($j=1; $j <= $c; $j++){ 
                echo "<td></td>";
            } 
            echo "</tr>";
        }
        
    }
    echo "</table>";

?>