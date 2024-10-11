<?php
$name = $email = $website = $age = $comment = $gender = "";
$nameErr = $emailErr = $ageErr = $genderErr = $commentErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } elseif (!is_numeric($_POST["age"]) || $_POST["age"] < 1 || $_POST["age"] > 200) {
        $ageErr = "Age must be between 1 and 200";
    } else {
        $age = test_input($_POST["age"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
        $commentWordCount = str_word_count($comment);
        if ($commentWordCount > 150) {
            $commentErr = "Comment must not exceed 150 words (you entered $commentWordCount words)";
        }
    }

    if (!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $website = "";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation and Display</title>
    <style>
        .output { 
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #000;
            width: 50%;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        .required {
            color: red;
        }
        .note {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <h2>Form Validation and Display with Labels</h2>
    <p class="note">Fields marked with a <span class="required">*</span> are required.</p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <label for="name">Name: <span class="required">*</span></label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
        <span class="required"><?php echo $nameErr;?></span><br><br>

        <label for="email">E-mail: <span class="required">*</span></label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>">
        <span class="required"><?php echo $emailErr;?></span><br><br>

        <label for="website">Website:</label>
        <input type="url" id="website" name="website" value="<?php echo $website;?>"><br><br>

        <label for="age">Age: <span class="required">*</span></label>
        <input type="number" id="age" name="age" value="<?php echo $age;?>" min="1" max="200">
        <span class="required"><?php echo $ageErr;?></span><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <span class="required"><?php echo $commentErr;?></span><br><br>

        <label>Gender: <span class="required">*</span></label>
        <input type="radio" id="male" name="gender" value="Male" <?php if (isset($gender) && $gender=="Male") echo "checked";?>>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>>
        <label for="female">Female</label>
        <span class="required"><?php echo $genderErr;?></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($genderErr) && empty($commentErr)) {
        echo "<div class='output'>";
        echo "<h3>Submitted Data:</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Website:</strong> $website</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Comment:</strong> $comment</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
