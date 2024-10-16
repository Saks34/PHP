<?php
$name = $email = $website = $age = $comment = $gender = "";
$nameErr = $emailErr = $ageErr = $genderErr = $commentErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate name
    $name = test_input($_POST["name"]);
    if (empty($name)) {
        $nameErr = "Name is required";
    }

    // Sanitize and validate email
    $email = test_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Sanitize and validate age
    $age = test_input($_POST["age"]);
    if (empty($age)) {
        $ageErr = "Age is required";
    } elseif (!is_numeric($age) || $age < 1 || $age > 200) {
        $ageErr = "Age must be between 1 and 200";
    }

    // Sanitize and validate gender
    $gender = test_input($_POST["gender"]);
    if (empty($gender)) {
        $genderErr = "Gender is required";
    }

    // Sanitize and check comment word count
    $comment = test_input($_POST["comment"]);
    if (!empty($comment)) {
        $commentWordCount = str_word_count($comment);
        if ($commentWordCount > 150) {
            $commentErr = "Comment must not exceed 150 words (you entered $commentWordCount words)";
        }
    }

    // Sanitize and validate website (optional)
    $website = test_input($_POST["website"]);
    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $website = ""; // Clear website if it's not a valid URL
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // Handle quotes and special chars
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
