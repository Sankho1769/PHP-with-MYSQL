<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="even_odd.php" method="post">
      <lable>Enter a number : </lable>
       <input type="text" name="num1" /> <br>
      
    <input type="submit" value="Submit"/> <br>
    </form>
    
</body>
</html>

<?php
$x =$_POST["num1"];
if ($x%2==0){
    echo"$x is the even number";
}
else{
    echo "$x is a odd number";
}
?>