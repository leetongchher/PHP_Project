<?php  
$ind = array(6,1,9,3,2,6,5,7);
$str = array("c","u","a","t","b");
foreach($ind as $n){
  echo $n . " | ";
}
echo "<br>";
foreach($str as $s){
  echo $s . " | ";
}
sort($ind);
rsort($str);
echo "<br>";
foreach($ind as $n){
  echo $n . " | ";
}
echo "<br>";
foreach($str as $s){
  echo $s . " | ";
}
?>