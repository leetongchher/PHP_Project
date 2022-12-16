<form method="post">
    Salary : <input type="number" name= "salary">
    <input type="submit" value="Calculate">

</form>

<?php
    $salary = $_POST["salary"];
    if($salary ==100){
        $cal = $salary *(5/100);
        
    }else if($salary ==200){
        $cal = $salary *(10/100);
        
    }else if($salary ==300){
        $cal = $salary *(15/100);
 
    }else if($salary ==400){
        $cal = $salary *(20/100);

    }else if($salary ==500){
        $cal = $salary *(25/100);

    }else{
        echo "salary is out from 100, 200 , 300 , 400 , 500";
    }
    $salary_after_tax =$salary - $cal; 
    echo "Tax: ". $cal ;
    echo "<br> Salary after tax : ". $salary_after_tax ;
?>