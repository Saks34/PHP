<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correctUsername = 'admin';   
    $correctPassword = 'password'; 

    if ($username === $correctUsername && $password === $correctPassword) {
        
        $_SESSION['username'] = $username;

        header('Location: display.php');
        exit; 
    } else {
        $error = 'Incorrect Username or Password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php 
    
    if (isset($error)) { 
        echo "<p style='color:red;'>$error</p>"; 
    } 
    ?>
    
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
