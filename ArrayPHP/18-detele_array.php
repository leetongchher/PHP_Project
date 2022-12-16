<?php
//delete the front and the end of array
    $arr = array(50,12,74,83,23,65,23,754,23);
    // array_pop($arr); //delete end of array
    for ($i=0; $i < 5; $i++) { 
        array_shift($arr); //delete front of array
    }
    foreach ($arr as $a) {
        echo $a."<br>";
    }
?>