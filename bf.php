<?php
$cookie_name = "user";
$cookie_value = "Saksham";
setcookie($cookie_name, $cookie_value, time() + 60, "/"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Cookie</title>
</head>
<body>

<h2>Cookie Check</h2>

<?php
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

</body>
</html>
