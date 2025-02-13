<?php
$x= 300;
$y = 200;

function multiply(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
multiply();
echo $z."<br>";
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z."<br>";
function subtraction(){
    $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
}
subtraction();
echo $z."<br>";
function division(){
    $GLOBALS['z'] = $GLOBALS['x'] / $GLOBALS['y'];
}
division();
echo $z."<br>";
?>