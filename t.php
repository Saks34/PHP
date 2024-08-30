<?php
$a = readline();
$b = readline();
while($b!=0){
    $r = $a%$b;
    $a = $b;
    $b = $r;
}
echo $a;
?>