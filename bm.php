<?php
function validateInteger($input) {
    if (filter_var($input, FILTER_VALIDATE_INT) !== false) {
        return "The input is a valid integer.";
    } else {
        return "The input is not a valid integer.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["integer"];
    $validationMessage = validateInteger($input);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer Validator</title>
</head>
<body>

<h2>Integer Validator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="integer">Enter an integer:</label>
    <input type="text" id="integer" name="integer" required>
    <input type="submit" value="Validate">
</form>

<?php
if (isset($validationMessage)) {
    echo "<p>$validationMessage</p>";
}
?>

</body>
</html>
