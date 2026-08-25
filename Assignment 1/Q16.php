<!-- 16.	Find the count of a search word from a paragraph by user input page where the paragraph is user input and the search word is user input. -->

<!DOCTYPE html>
<html>
<body>

<form method="post">

    Enter paragraph:<br>
    <textarea name="paragraph" rows="5" cols="50"></textarea>
    <br><br>

    Enter search word:
    <input type="text" name="word">

    <input type="submit" value="Search">

</form>

<?php

if (isset($_POST["paragraph"]) && isset($_POST["word"])) {

    $paragraph = $_POST["paragraph"];
    $word = $_POST["word"];

    $count = substr_count(strtolower($paragraph), strtolower($word));

    echo "The word appears " . $count . " times.";

}

?>

</body>
</html>