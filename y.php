<?php
$c = [3,7,2,8,1,4,10,5];
$a=[];
$d=0;
foreach($c as $z){
    if($z%2==0){
        continue;
    }
    else{
      $a[] = $z*$z;
    }
}
rsort($a);
foreach($a as $w){
$d+=$w;
}
echo "<pre>";
print_r ($a);
echo "</pre>";
echo "<br>";
echo "Sum = ",$d;
?>