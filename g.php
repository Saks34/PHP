<?php 
$a = readline();
$b = readline();
$v = $b =="indian"? ($a>=18? "Legal":"not legal"): "not legal";
echo "Person is an ", $b, " and he is ", $v, " to vote there";
?>