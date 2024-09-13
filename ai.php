<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 5;
$y = 10;

echo "Before swapping: x = $x, y = $y<br>";

swap($x, $y);

echo "After swapping: x = $x, y = $y";
?>
