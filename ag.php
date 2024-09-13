<?php
function Calbmi($w, $h) {
    $bmi = $w / ($h * $h);
    if ($bmi < 18.5) {
        return "Your BMI is " . $bmi . " and you are underweight";
    } else if ($bmi < 24.9) {
        return "Your BMI is " . $bmi . " and you are normal";
    } else if ($bmi < 29.9) {
        return "Your BMI is " . $bmi . " and you are overweight";
    } else if ($bmi >= 29.9) {
        return "Your BMI is " . $bmi . " and you are obese";
    } else {
        return "Invalid";
    }
}

echo Calbmi(70, 1.65);
?>
