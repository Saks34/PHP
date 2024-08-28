<?php
$a = readline();
$b = readline();
$c = readline();
$v = $a >$b ? ($a>$c ? $a:$c):  ($b>$c? $b:$c);
echo $v;
?>