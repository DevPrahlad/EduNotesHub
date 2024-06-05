<?php
session_start();
error_reporting(0);
if (empty($_SESSION['email'])) { 
    header('location:userarea/userlogin.php');
    exit();
}

include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $domain = $_POST['domain'];
    $contact_link = $_POST['contact_link'];

    // File upload handling
    if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['screenshot']['tmp_name'];
        $fileName = $_FILES['screenshot']['name'];
        $fileSize = $_FILES['screenshot']['size'];
        $fileType = $_FILES['screenshot']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadPath = 'uploads/' . $newFileName;

            if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                // Insert the file name or path into the database along with other project details
                $sql = "INSERT INTO projects (name, domain, contact_link, screenshot) VALUES ('$name', '$domain', '$contact_link', '$newFileName')";
                if (mysqli_query($con, $sql)) {
                    echo "Project uploaded successfully.";
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            } else {
                echo "Error uploading file. Error code: " . $_FILES['screenshot']['error'];
            }
        } else {
            echo "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
        }
    } else {
        echo "Error uploading file. Error code: " . $_FILES['screenshot']['error'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project | EduNotesHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <style>
        body { font-family: Arial, Helvetica, sans-serif; }
        .form-container { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background: #f9f9f9; }
        input[type=text], input[type=file], textarea { width: 100%; padding: 10px; margin: 5px 0 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        input[type=submit] { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add New Project</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Project Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="domain">Domain:</label>
            <input type="text" id="domain" name="domain">

            <label for="contact_link">Contact Us Link:</label>
            <input type="text" id="contact_link" name="contact_link" required>

            <label for="screenshot">Screenshot:</label>
            <input type="file" id="screenshot" name="screenshot" accept="image/*">

            <input type="submit" value="Add Project">
        </form>
    </div>
</body>
</html>
