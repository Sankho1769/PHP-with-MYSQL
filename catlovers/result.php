<?php

    $x = $_POST["num1"];
    $y = $_POST["num2"];

    //$r = rand($x, $y);
     $r = $x + $y;
      $a = $x - $y;
      $b = $x * $y;
      $c = $x / $y;
      $d = $x % $y;
       $e = $x ** $y;
    echo "The sum  is $r <br>";
    echo "The sub  is $a <br>";
    echo "The multiplication  is $b <br>";
    echo "The division  is $c <br>";
    echo "The modulus  is $d <br>";
     echo "The power  is $e";


    

?>