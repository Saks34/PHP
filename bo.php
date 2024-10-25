<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    $user_dir = "uploads/" . preg_replace("/[^a-zA-Z0-9]/", "_", $name) . "/";

    if (!is_dir($user_dir)) {
        mkdir($user_dir, 0777, true);
    }

    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $photo_name = basename($_FILES["photo"]["name"]);
        $target_file = $user_dir . uniqid() . "_" . $photo_name;

        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $valid_extensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($image_file_type, $valid_extensions)) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $data_file = $user_dir . "data.txt";
                $data = "Name: $name, Age: $age";
                file_put_contents($data_file, $data);

                echo "<p><strong>Data and photo successfully uploaded!</p>";
            } else {
                echo "<p>Error uploading the photo file.</p>";
            }
        } else {
            echo "<p>Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.</p>";
        }
    } else {
        echo "<p>Error in file upload or no file uploaded.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Name, Age, and Photo</title>
</head>
<body>

<h2>Upload Your Details</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="photo">Upload Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
