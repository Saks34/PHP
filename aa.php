<?php
$c = array(
    array("Sakshu",7.8,"pass"),
    array("Hello",5.8,"pass"),
    array("gaya",3.8,"fail")
);

echo "<pre>";
print_r($c);
echo "</pre>";

foreach($c as $r){
    foreach($r as $a){
        echo $a,"<br>";
    }
    echo "<br>";
}
?>