<?php
    $errname="";
    if (isset($_POST["save"])) {
        if(empty($_POST['name'])){
            $errname="Name is required";

        }
        else{
            echo "The name is ",$_POST['name'];
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <span style="color:red">*<?php echo $errname; ?></span><br>
        <label for="pw">Password</label>
        <input type="password" name="password" id="pw"><br>
        <input type="submit" name="save">
    </form>

    
</body>
</html>