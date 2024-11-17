<?php

$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "The array to declare:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";


echo "Shapes to print<br>";

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br>";

$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$char ";
        $char++;
    }
    echo "<br>";
}
?>
