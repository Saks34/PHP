<?php
session_start();

session_unset(); 
session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h2>You have successfully logged out!</h2>
    
    
    <form action="login.php" method="get">
        <button type="submit">Go to Login Page</button>
    </form>
</body>
</html>
