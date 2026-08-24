<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop.php" method="post">
        
       
       <label>Input a number : </label>
        <input type="number" name="number" ></input> </br>
        <input type="submit" value="Submit"/> </br>
    </form>
</body>
</html>

<?php
$num=$_POST["number"];{
    foreach(range($num,1)as $i){
        echo "$i <br>";
    }
}
?>