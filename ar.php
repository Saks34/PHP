<?php
$food = array(
    "fruits" => array("apple", "banana", "apple", "orange", "banana"),
    "veggies" => array("carrot", "broccoli", "spinach")
);

$fruitCount = array_count_values($food["fruits"]);

print_r($fruitCount); 
?>