<?php
$a = array("a"=>"bye","b"=>"good","c"=>"ago");
$b = array("a"=>"bye","b"=>"good");
$r = array_diff($a,$b);
print_r($r);
?>