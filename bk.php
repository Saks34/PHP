<?php
function validateURL($url) {
    $url = filter_var($url, FILTER_SANITIZE_URL);

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $host = parse_url($url, PHP_URL_HOST);

        if (checkdnsrr($host, "A")) {
            return "The URL is valid and the domain exists.";
        } else {
            return "The URL is valid, but the domain does not exist.";
        }
    } else {
        return "The URL is not valid.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    $validationMessage = validateURL($url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validator</title>
</head>
<body>

<h2>URL Validator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="url">Enter a URL:</label>
    <input type="text" id="url" name="url" required>
    <input type="submit" value="Validate">
</form>

<?php
if (isset($validationMessage)) {
    echo "<p>$validationMessage</p>";
}
?>

</body>
</html>
