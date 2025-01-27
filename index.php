<?php
  // echo ("<h1> Hello World! </h1>");
  // $a = 43;
  // $b = 'hi';
  // $h = "hi";
  // $c =  8.9;
  // $d = true;
  // $e = NULL;
  // $f = [1,2,3];
  // var_dump($a);
  // echo "<br>";
  // var_dump($b);
  // echo "<br>";
  // var_dump($h);
  // echo "<br>";
  // var_dump($c);
  // echo "<br>";
  // var_dump($d);
  // echo "<br>";
  // var_dump($e);
  // echo "<br>";
  // var_dump($f);
  // echo "<br>";
  // echo "<hr>";
  // $str = "raining";
  // echo "It is $str";
  // echo "<br>";
  // echo 'It is $str';
  // echo "<br>";
  // echo 'It is '.$str;

  // echo "<hr>";
  // echo "\n";
  // $a1 = 10;
  // $b1 = 20;
  // $a1 = $b1;
  // echo $a1;

  // echo "<hr>";
  // echo "\n";
  
  //echo "<h1> Hello World! </h1>";

  // $x = 10;
  // $y = 20;
  // if($x == $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x === $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x != $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x !== $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x > $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x < $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x >= $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }
  // if($x <= $y){
  //     echo "\n true";
  // }
  // else{
  //     echo "\n false";
  // }

  // $x = "Hello World!";
  // echo strtoupper($x);
  // echo "<br>";
  // echo strtolower($x);
  // echo "<br>";
  // echo strlen($x);
  // echo "<br>";
  // echo str_replace("Hello", "Hi", $x);
  // echo "<br>";
  // $x = "Hello World!";
  // echo strrev($x);
  // echo "<br>";

  // $x = 10;

  // $y = ++$x;

  // echo $x;
  // echo "<br>";
  // echo $y;
  // echo "<br>";
  // echo $x . " " . $y;

  // $x ="Hello";
  // $y = "World!";

  // $z = $x . " ". $y;
  // echo $z;
  // echo "<br>";

  // $x ="Hello";
  // $y = "World!";

  // $z = "$x $y";
  // echo $z;
  // echo "<br>"

  // echo $status = $user ?? "Guest";
  // echo "<br>";
  // $user = "John";
  // echo $status = $user ?? "Guest";
  // echo "<br>";

  // $input = trim(fgets(STDIN));
  // echo $input;
  // echo "<br>";

  // $input1 = readline("Enter your name: ");
  // echo $input1;
   echo "<br>";
  $day = date("D");
  
  switch ($day) {
      case "Mon":
          echo "Today is Monday";
          break;
      case "Tue":
          echo "Today is Tuesday";
          break;
      case "Wed":
          echo "Today is Wednesday";
          break;
      case "Thu":
          echo "Today is Thursday";
          break;
      case "Fri":
          echo "Today is Friday";
          break;
      case "Sat":
          echo "Today is Saturday";
          break;
      case "Sun":
          echo "Today is Sunday";
          break;
      default:
          echo "Invalid day";
  }
?>