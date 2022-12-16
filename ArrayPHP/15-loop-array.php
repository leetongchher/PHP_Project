<?php
    $text = array("A: Hello","B: Hi","A: What's up?");
    foreach($text as $newtxt){
        if($newtxt == "B: Hi"){
            continue;
        }
        echo "$newtxt <br>";
    }
?>