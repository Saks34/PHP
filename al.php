<?php
function sum(){
    $s = $GLOBALS['a']+$GLOBALS['b'];
    return $s;
}
$a=5;
$b=19;

echo sum();
?>