<?php
  $person = array("Name"=>"Ly Tongchher",
                "Gender"=>"Male",
                "Date of Birth"=>"12-Dec-2002",
                "Salary"=>2000);
echo $person["Salary"]."$"."<br>";
foreach ($person as $key => $value) {
    echo $key .": ". $value."<br>";
    echo "---------------------";
}
$sub["program"]="PHP";
$sub["network"]="Window Server";
$sub["design"]="photoshop";
$sub["network"]="cisco";
unset($sub["program"]);
foreach ($sub as $key => $value) {
    echo $key .": ". $value."<br>";

}
?>