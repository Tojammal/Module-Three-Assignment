<?php
$number = [1,2,3,4,5,6,7,8,9,10];
function notEven($n){
    return ($n%2 !==0);
}
$notEven = array_filter($number, "notEven");
print_r($notEven);