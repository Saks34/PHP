<?php
$a = readline();
$z=0;
while($a>0){
   
    $z = $z*10+ $a%10;
    $a= (int)($a/10);
}
echo $z;
?>