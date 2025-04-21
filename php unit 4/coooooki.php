<?php


echo "wecome to world of cookies";
setcookie("username","john",time()+3600);

if (isset($_COOKIE["username"])) {
    echo "welcome back ".$_COOKIE["username"];
} else {
    echo "please login";
}


?>