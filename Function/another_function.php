<?php
    function calage ($a){
        $year = date("Y");
        settype($year,'integer');
        return $age = $year - $a;
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }


?>
<form action="" method="post">
    Age : <input type="number" name="age" value="<?php echo $age; ?>"><br>
    <input type="submit" value="Save">
</form>
<?php
    echo calage($age);
?>