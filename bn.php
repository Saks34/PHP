<?php
// Directory to store uploaded photos
$upload_dir = "uploads/";

// Create the directory if it doesn't exist
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Function to handle form submission and file upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    
    // Check if a file was uploaded and if there were no errors
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        // Generate a unique file name for the uploaded photo
        $photo_name = basename($_FILES["photo"]["name"]);
        $target_file = $upload_dir . uniqid() . "_" . $photo_name;
        
        // Check if the file is a valid image type (optional check)
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $valid_extensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($image_file_type, $valid_extensions)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                // Store name, age, and photo file path in a text file
                $data_file = "data.txt";
                $data = "Name: $name, Age: $age, Photo: $target_file\n";
                file_put_contents($data_file, $data, FILE_APPEND);

                echo "<p>Data and photo successfully uploaded!</p>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Uploaded Photo:</strong></p><img src='$target_file' alt='Uploaded Photo' width='200'>";
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
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br><br>

    <label for="photo">Upload Photo:</label><br>
    <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
