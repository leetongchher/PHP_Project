<?php
    $arr = array(13,42,73,4,35,6,77,28,59);
    $a = count($arr);
    var_dump($a);
    for ($i=0; $i < $a; $i++) { 
        echo $arr[$i]."<br>";

    }
    echo "<br>";
    $arr [5] = 100;
    for ($i=0; $i < $a; $i++) { 
        echo $arr[$i]."<br>";
    }
    echo "<br>";

    //Add in the end
    array_push($arr,1000,211);
    $arr [5] = 100;
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i]."<br>";
    }
    echo "<br>";

    //Add in the front
    array_unshift($arr,534,98);
    $arr [5] = 100;
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i]."<br>";
    }
    
?>

