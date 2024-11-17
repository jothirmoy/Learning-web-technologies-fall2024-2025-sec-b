<?php
echo"All the odd numbers between 10 to 100 :<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ", ";
    }
}
?>
