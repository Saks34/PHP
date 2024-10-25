<?php
function validateAndSanitizeURL($url) {
    $sanitized_url = filter_var($url, FILTER_SANITIZE_URL);

    if (filter_var($sanitized_url, FILTER_VALIDATE_URL)) {
    
        $host = parse_url($sanitized_url, PHP_URL_HOST);

        if (checkdnsrr($host, "A")) {
            return ["The URL is valid, sanitized, and the domain exists.", $sanitized_url];
        } else {
            return ["The URL is valid and sanitized, but the domain does not exist.", $sanitized_url];
        }
    } else {
        return ["The URL is not valid even after sanitization.", $sanitized_url];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    list($validationMessage, $sanitized_url) = validateAndSanitizeURL($url);
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
    echo "<p>Sanitized URL: <strong>$sanitized_url</strong></p>";
}
?>

</body>
</html>
