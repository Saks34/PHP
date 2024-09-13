<?php
$c = array(
    array("Choro",7.8,"pass"),
    array("Wo",5.8,"pass"),
    array("Gaya",3.8,"fail")
);

echo "<pre>";
print_r($c);
echo "</pre>";

echo "<table border='2px'>";

echo " <tr> <th> Name </th><th> CGPA </th><th> Status </th></tr>";

foreach($c as $r){
    echo " <tr>";
    foreach($r as $a){
        echo "<td>",$a,"</td>";
    }
    echo "</tr>";
}
?>