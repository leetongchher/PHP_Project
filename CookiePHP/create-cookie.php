<?php
    setcookie('ABC','Hello world',time()+(86400));
    setcookie('abc','Testing',time()-1);

    echo $_COOKIE["ABC"];
    echo $_COOKIE["abc"];
?>