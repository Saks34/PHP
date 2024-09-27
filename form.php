<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="ph">Phone Number</label>
        <input type="number" id="ph" name="ph">
        <br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address">
        <br>
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="submit" name="save" id="button" value="Submit">
    </form>
    
    <?php
    if (isset($_POST["save"])) {
        echo "Welcome " . $_POST["name"] . ", your email is " . $_POST["email"] . ", your phone number is " . $_POST["ph"] . ", and your address is " . $_POST["address"];
    }
    ?>
</body>
</html>
