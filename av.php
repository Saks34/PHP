<?php
$a = array("a"=>"bye","b"=>"good","c"=>"ago");
$b = array("c"=>"bye","b"=>"good");
$c = array("b"=>"be","a"=>"god");

$r = array_merge($a,$b,$c);
print_r($r);
?>