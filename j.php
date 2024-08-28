<?php
$y = readline("Year = ");
if($y>0){
    $l = ($y % 400 == 0) || ($y % 4 == 0 && $y % 100 != 0) ? 1 : 0;
    $m = readline("Month = ");
    if ($m > 0 && $m <= 12) {
        $d = readline("Day = ");
        if ($d<=0) {
            echo "Not Valid";
        } else {
            $z = 0;
            if($m==1||$m==3||$m==5||$m==7||$m==8||$m==10||$m==12){
                    if ($d <= 31) 
                        $z = 1;
                    }
                
                else if($m==2){
                    if ($l == 1) {
                        if ($d <= 29) {
                            $z = 1;
                        }
                    } else {
                        if ($d <= 28) {
                            $z = 1;
                        }
                    }
                }
                else{
                    if ($d <= 30) {
                        $z = 1;
                    }
                }
                    
            }
        
        }
    }
if($z==1){
    echo "Valid";
}
else{
    echo "Not Valid";
}
?>