<?php
$cookie_name = "user";
$cookie_value = "Saksham";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['set_cookie'])) {
      
        setcookie($cookie_name, $cookie_value, time() + 100, "/"); 
        $message = "Cookie has been set!";
    } elseif (isset($_POST['delete_cookie'])) {
        setcookie($cookie_name, "", time() - 100, "/");
        $message = "Cookie has been deleted!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set and Delete Cookie</title>
</head>
<body>

<h2>Cookie Management</h2>

<form method="post">
    <button type="submit" name="set_cookie">Set Cookie</button>
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($message)) {
        echo "<p><strong>$message</strong></p>";
    }
}

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

</body>
</html>
