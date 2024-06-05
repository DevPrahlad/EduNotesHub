<?php
// Database connection
include 'db.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['circular_file'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $file = $_FILES['circular_file'];
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($file['name']);

    // Check if upload directory exists, if not, create it
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move uploaded file to the destination directory
    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        $post_date = date('Y-m-d');
        $sql = "INSERT INTO circulars (title, file_path, post_date) VALUES ('$title', '$uploadFile', '$post_date')";
        if ($conn->query($sql) === TRUE) {
            echo "Circular uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Circular</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .form-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Upload New Circular</h1>
        <div class="form-container">
            <form action="upload_circular" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Circular Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="circular_file">Upload Circular (PDF)</label>
                    <input type="file" class="form-control-file" id="circular_file" name="circular_file" accept="application/pdf" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
               
            </form>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
