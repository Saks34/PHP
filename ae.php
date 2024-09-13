<?php
function r($x, $y) {
    return $x * $y;
}

function t($x, $y) {
    return 0.5 * $x * $y;
}

function c($x) {
    return 3.14 * $x * $x;
}

$shape = readline("Enter the shape (rectangle, triangle, circle): ");


switch ($shape) {
    case "rectangle":
        $length = readline("Enter the length: ");
        $width = readline("Enter the width: ");
        echo "The area of the rectangle is: " . r($length, $width);
        break;
    
    case "triangle":
        $base = readline("Enter the base: ");
        $height = readline("Enter the height: ");
        echo "The area of the triangle is: " . t($base, $height);
        break;
    
    case "circle":
        $radius = readline("Enter the radius: ");
        echo "The area of the circle is: " . c($radius);
        break;

    default:
        echo "Invalid shape!";
        break;
}
?>
