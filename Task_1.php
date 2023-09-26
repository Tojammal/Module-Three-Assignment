<?php
$text = "The quick brown fox jumps over the lazy dog.";
function newText($text) {
    
    $lowercaseText = strtolower($text);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace('brown', 'red', $lowercaseText);

    return $modifiedText;
}

// Initial string


// Call the function to modify the text
$modifiedText = newText($text);

// Print the modified text
echo $modifiedText;