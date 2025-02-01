<?php
$car = array(1,2,3,"SUN");
// var_dump($car);
echo "\n";
// echo $car[0];
echo "\n";
array_push($car, 4);
// $car[0] = 4;

foreach($car as $value){
    echo "\n";
    echo $value;
}


?>