<form method="post">
    Number : <input type="number" name="num">
    <input type="submit">
</form>

<?php
//1
    $text = "1000"; //string 
    var_dump($text);
    settype($text,"integer");//integer
    var_dump($text);//data type after convert

//2 settype
    $a = $_POST['num'];
    echo "<br>";
    var_dump($a);
    settype($a,"integer");
    var_dump($a);

//3
    $b = 2022; //
    echo "<br>";
    var_dump($b);
    $b = (string)$b;
    echo "<br>";
    var_dump($b);

//4
    echo "<br>";
    $i = $_POST['num'];
    if($i %2 == 0){
        echo "លេខគូ";
    }else{
        echo "លេខសេស";
    }
?>