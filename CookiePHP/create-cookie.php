<?php
    setcookie('ABC','Hello world',time()+(86400));
    echo $_COOKIE["ABC"];
?>