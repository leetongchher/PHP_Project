<?php  
$asoc = array(
        "name"=>"Keo Sopheaktra",
        "gender"=>"Male",
        "age"=>30,
        "address"=>"Siemreap"
      );
foreach($asoc as $k=>$v){
  echo $k . "=>" . $v . "<br>";
}
echo "<br>";
ksort($asoc);
foreach($asoc as $k=>$v){
  echo $k . "=>" . $v . "<br>";
}
echo "<br>";
asort($asoc);
foreach($asoc as $k=>$v){
  echo $k . "=>" . $v . "<br>";
}
?>