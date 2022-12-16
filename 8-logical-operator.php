<form method="post">
    Score :<input type="number" name="score">
    <input type="submit" value="Post">

</form>
<?php
    $scr = $_POST["score"];
    if($scr <=100 and $scr >80){
        echo "Grade A" ;
    }else if($scr <=80 and $scr >60){
        echo "Grade B" ;
    }else if($scr <=60 and $scr >=0){
        echo "Grade C" ;
    }
?>