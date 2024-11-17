<?php

$array = array(10, 20, 30, 40, 50);
$searchElement = 40;
$found = false;

for ($i = 0; $i < count($array); $i++) {

    if ($array[$i] == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $searchElement found in the array.";
} else {
    echo "Element $searchElement not found in the array.";
}

?>
