<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action ="<?php echo $_SERVER["PHP_SELF"]?>">
        <label for="name">Name</label>
        <input type="name" id="name" name="name">
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" name ="save" id="button">
    </form>
    <?php
    if(isset($_POST["save"]))
    {
        echo "Welcome ", $_POST["name"], "Your Password is ",$_POST["password"];
    }
    ?>
</body>
</html>