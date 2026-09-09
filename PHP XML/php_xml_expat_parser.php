<?php

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$xmlData = "<?xml version=\"1.0\"?>
<student>
    <name>" . htmlspecialchars($name) . "</name>
    <age>" . (int)$age . "</age>
</student>";

function startElement($parser, $element, $attributes)
{
    echo "Start: $element\n";
}

function endElement($parser, $element)
{
    echo "End: $element\n";
}

function characterData($parser, $data)
{
    $data = trim($data);

    if ($data != "") {
        echo "Data: $data\n";
    }
}

$parser = xml_parser_create();

xml_set_element_handler($parser, "startElement", "endElement");
xml_set_character_data_handler($parser, "characterData");

xml_parse($parser, $xmlData, true);

xml_parser_free($parser);

?>