<?php
$word1 = "secure";
$word2 = "password";
$word3 = "generator";
$password = strtoupper(substr($word1, 0, 3) .substr($word2, 0, 3).substr($word3, 0, 3));
$password = str_replace('S', '$', $password);
$l = strlen($password);
echo $password,"\n",$l;
?>