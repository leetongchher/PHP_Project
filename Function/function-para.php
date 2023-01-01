
<form action="" method="post">
    Firstname : <input type="text" name="fname"><br>
    Lastname : <input type="text" name="lname"><br>
    <input type="submit" value="Save">
</form>
<?php
    function setname ($f,$l){
        return $name = $l. " " .$f;
    }
    if (isset($_POST['fname'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo setname($fname, $lname);
    }


?>