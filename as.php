<?php
$a = array("a"=>"bye","b"=>"good","c"=>"ago");
$b = array("e"=>"bye","f"=>"good");
$c = array("d"=>"be","g"=>"god");

$r = array_diff($c,$a,$b);
print_r($r);
?>