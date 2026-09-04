<?php

$oldName = "uploads/old_name.txt";
$newName = "uploads/new_name.txt";

if (file_exists($oldName)) {

    rename($oldName, $newName);

    echo "File renamed successfully.";

} else {

    echo "File does not exist.";

}

?>