<?php
if (isset($_FILES['image'])) {
    $targetDir = "photos/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        echo "<p><strong>File uploaded successfully</p>";
    } else {
        echo "<p>There was an error uploading the file.</p>";
    }
}

$images = glob("photos/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
if (count($images) > 0) {
    echo "<h2>Uploaded Photos:</h2>";
    foreach ($images as $image) {
        echo "<img src='$image' style='max-width: 200px; margin: 10px;'>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
