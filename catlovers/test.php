<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="test.php" method="post">
        <lable>Input Paragraph </lable>
      <textarea name="para" rows="10" cols="30" > </textarea> <br>
       <lable>Word to replace: </lable>
       <input type="text" name="word" /> <br>
       <lable>Replacement word: </lable>
       <input type="text" name="rep_word" /> <br>
        <input type="submit" value="Submit"/>
    </form>
    
</body>
</html>

<?php

    $text = $_POST["para"];
    //$len = strlen($text);
   // $word = str_word_count($text);
    //echo "The length of the given string/paragraph is $len"
   // echo "The no of words in this paragraph is $word";
    $word = $_POST["word"];
    //$x = strtolower($text);
    //echo "$x";
    $replace = $_POST["rep_word"];
    $us = str_replace($word,$replace, $text);
    echo "$us";
?>