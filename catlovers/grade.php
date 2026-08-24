<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="grade.php" method="post">
      <lable>Enter the marks : </lable>
       <input type="number" name="num1" /> <br>
      
    <input type="submit" value="Submit"/> <br>
    </form>
    
</body>
</html>

<?php
$x =$_POST["num1"];
if ($x>800 and $x<=1000){
echo"$x is Class I";
}
elseif ($x>600 and $x<=800) {
    echo "$x is Class II";
}

elseif ($x>=400 and $x<=600) {
     echo "$x is Class III";
}

elseif ($x<400){
    echo"Fail";
}

else{
    echo"invalid input";
}
?>