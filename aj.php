<?php
function fnf($a){
    $a=$a."_done";
    echo "While Modifying" ,$a;
}

$x= "Hello";
echo $x;

fnf($x);

echo $x;
?>