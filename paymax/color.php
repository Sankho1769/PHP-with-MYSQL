<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="color.php" method="post">
        
       
       <label>Input your Color : </label>
        <input type="text" name="colors" ></input> </br>
        <label>Remove your Color : </label>
        <input type="text" name="rcolor" ></input> </br>
        <input type="submit" value="Submit"/> </br>
    </form>

   
    


    <?php
    $colors=$_POST["colors"];
    $remove=$_POST["rcolor"];
   // echo $remove;
    $cl=explode(" ", $colors);
   // print_r ($cl);
    //$newarray= array_diff($color, [$remove]);
    for ($i=0; $i<count($cl);$i++){
        if($cl[$i]==$remove){
            unset($cl[$i]);
        }
    }
    
   foreach($cl as $c)
        echo "$c <br>";





    ?>

</body>
</html>