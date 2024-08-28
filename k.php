<?php
$i = readline("Income = ");
$a = readline("Age = ");
if($i>20000){
    if($a<65){
        $t = $i*0.2;
    }
    else{
        $t = $i*0.15;
    }
}
else if($i>=10000){
    if($a<65){
        $t = $i*0.1;
    }
    else{
        $t = $i*0.05;
    }
}

else{
$t =0;
}
echo $t;
?>