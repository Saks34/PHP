<?php
$a = readline();
$z =0;
while($a>0){
    $i = $a%10;
    $z+=$i;
    $a/=10;
}
echo $z;
?>