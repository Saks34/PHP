<?php
$r = readline("Are you regular here? ");

if($r=="y"){
    $a = readline("Amount = ");
    if($a>500){
        $d = $a*0.8;
    }
    else{
        $d = $a*0.9;
    }
    echo "You have to pay ",$d;
}
else if($r=="n"){
    $a = readline("Amount = ");
    if($a>500){
        $d = $a*0.95;
    }
    else{
        $d = $a;
    }
    echo "You have to pay ",$d;
}

else{
    echo "Wrong input, only 'y' and 'n' are allowed, please re run the code";
}

?>