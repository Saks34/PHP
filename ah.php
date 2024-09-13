<?php
function splitBill($totalAmount, $numOfDiners) {
    if ($numOfDiners <= 0) {
        return "Number of diners should be greater than 0.";
    }

    $amountPerPerson = $totalAmount / $numOfDiners;
    return round($amountPerPerson, 2);
}



echo splitBill(14, 196);
?>
