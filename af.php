<?php
function cf($dl){
    if($dl>10){
        return ($dl-10)*5 + 15;
    }
    else if($dl>=6){
        return ($dl-5)*2 +5;
    }
    else if($dl>0){
        return $dl;
    }
    else{
        return "Invalid Data";
    }
}

$w = readline();

echo cf($w);
?>