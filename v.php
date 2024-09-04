<?php
$c = array("a"=>"red","b"=>"blue","c"=>"green");
foreach($c as $k=>$v){
    echo $k, " => " , $v," ";
}
echo "\n";
for($i=0;$i<count($c);$i++){
    $z = array_keys($c);
    echo $z[$i]," => ", $c[$z[$i]]," ";
}
?>