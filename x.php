<?php
$c = ["Alice" => "85","Charlie"=>"92","Eve"=>"88","Sakshu"=>"100"];
$s=0;
for($i=0;$i<count($c);$i++){
    $z = array_keys($c);
    $s+= $c[$z[$i]];
}
$a = $s/ count($c);
echo "Avergae score is ", $a,"<br>";
echo"Scoring above average score are: ";
foreach($c as $k=>$v){
    if($v>$a){
        echo "<br>";
        echo $k, " scored ",$v;
        
    }
}
?>