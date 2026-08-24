<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="word.php" method="post">
        
       
       <label>Input your favourite colour : </label>
        <input type="text" name="color" ></input> </br>
        <input type="submit" value="Submit"/> </br>
    </form>

    <?php
        // $color=$_POST["color"];

        // $colorMatch= match($color) {
        //     "red" => "Roses are red.",
        //     "Blue" => "Violets are blue.",
        //     "Green" => "Grasses are green.",
        //     default => "Black is my Favourite color."
            
        //     };
        //     echo $colorMatch;
?> 
<?php
    $color = $_POST["color"];
    switch($color){
        case "red":
            echo "Roses are red";
            break;
        case "blue":
            echo "Violets are blue";
            break;
        case "green":
            echo "Grasses are green";
            break;

        default:
            echo "Invalid input";
    }
?>

</body>
</html>