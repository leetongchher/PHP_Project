<form method="post">
    Salary : <input type="number" name= "salary">
    <input type="submit" value="Calculate">

</form>

<?php
    $s = $_POST["salary"];
    switch ($s){
        case '100':
            $cal = $s * (5/100);
            break;
        case '200':
            $cal = $s * (10/100);
            break;
        case '300':
            $cal = $s * (15/100);
            break;
        case '400':
            $cal = $s * (20/100);
            break;
        case '500':
            $cal = $s * (5/100);
            break;
        default : 
            echo "out of 100,200,300,400,500";
    }
    echo $cal ;
?>