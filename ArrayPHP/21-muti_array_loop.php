<?php  
$cars = array(
        array("Ford","Ranger",2022,'$46000',"abc"),
        array("Lexus","LX570",2020,'$250000'),
        array("BMW","Unknow",2023,'$156000')
      );
for($i = 0;$i<count($cars);$i++){
  for($j = 0;$j<count($cars[$i]);$j++){
    echo $cars[$i][$j] . "<br>";
  }
  
}
?>