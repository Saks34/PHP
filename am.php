<?php
function hi(){
 static $a=10;
 $b=20;
 $a++;
 $b++;
 return $a." ".$b;   
}

echo hi();
echo "\n";
echo hi();
?>