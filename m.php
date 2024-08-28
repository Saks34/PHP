<?php
$p = readline("Which type of Consumption? ");
$c = readline("Total Consumption = ");
switch($p){
    case "Residential":{
        if($c>200){
            $a = 100*1.25 + ($c-200);
            break;
        }
        else if(a>100){
            $a = 100*0.5 + ($c-100)*0.75;
            break;
        }
        else{
            $a = $c*0.5;
            break;
        }
    }
        case "Comercial":{
        if($c>200){
            $a = 200*1.5 + ($c-200)*2;
            break;
        }
        else{
            $a = $c*1.5;
            break;
        }
    }
        case "Industrial":{
        $a = $c*2.5;
        break;
        }
}
echo "Amount to be paid = ",$a;
?>