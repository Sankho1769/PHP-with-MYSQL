<?php

    $r = $_POST["radius"];
   $circum =2*pi()*$r;
   $area = pi()*pow($r,2);
   $circum=round($circum,4);
   $area=round($area,4);

  // $r = pi();

    echo "The circumference of the circle: $circum";
    echo "<br>";
    echo "The area of circle: $area";

?>