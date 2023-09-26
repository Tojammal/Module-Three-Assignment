<?php
$text = "The quick brown fox jumps over the lazy dog.";


// Convert the string to all lowercase.

$convert = strtolower($text);
echo $convert,"<br/>";



// Replace "brown" with "red" in the string.

$string = strtr($text,[
    "brown" => "red"
]);

// Print the modified text.

echo $string;