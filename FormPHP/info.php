<?php  
$user = $_POST["u"];
$pass = $_POST["p"];
if ($user == "admin" && $pass == "123") {
  echo "Login Successfully";
}else{
  echo "Login Fail!!";
}
?>