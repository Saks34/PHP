<?php
$a = array(1200,1500,1300,1700,1600,1400,1800);
echo "Original Sales: [".implode(", ", $a)."]\n";
$b = readline("Enter the element you want to add: ");
array_push($a,$b);
echo "Updated Sales after adding: [".implode(", ", $a)."]\n";
$c = readline("Enter the index of the element you want to remove: ");
unset($a[$c]);
echo "Updated Sales after removing : [".implode(", ", $a)."]\n";
$d =array_sum($a);
echo "Total Sales: ",$d;
$e = max($a);
echo "\nHighest Sales: ",$e;
$f = min($a);
echo "\nLowest Sales: ",$f;
?>