<?php
include '../config.php';


// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['upload'])) {
    $targetvid = "video-uploads/" . basename($_FILES['video']['name']);
    $target = "uploads/" . basename($_FILES['image']['name']);
    $name = $_POST['mname'];
    
    $image = $_FILES['image']['name'];
    $video = $_FILES['video']['name'];

    // Check if database connection is established
    if ($con === false) {
        die("ERROR: Could not connect to the database. " . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO ebooks (name,  imgpath, videopath)
        VALUES('$name',  '$image', '$video')";

    // Attempt to execute the query
    if (mysqli_query($con, $sql)) {
        // Try to move the uploaded files
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid)) {
            header("Location: ../ebooks.php");
        } else {
            echo "Error uploading files.";
        }
    } else {
        echo "Error: Could not execute $sql. " . mysqli_error($con);
    }

    // Close the connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Books Upload | EduNotesHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background: #DCE35B; 
            background: -webkit-linear-gradient(to right, #45B649, #DCE35B); 
            background: linear-gradient(to right, #45B649, #DCE35B); 
            display: grid;
            place-items: center;
            height: 94vh;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        .jumbotron {
            background: #12192c;
            border-radius: 30px;
            padding: 2em;
            color: #DCE35B;
        }
        .signupbutton {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="jumbotron">
            <h1>Enter the E-Book Details</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="File Name" name="mname" required>
                </div>
               
                <div class="form-group">
                    <label for="image"><b>Upload Image:</b></label>
                    <input type="file" class="form-control-file" name="image" required>
                </div>
                <div class="form-group">
                    <label for="video"><b>Upload File:</b></label>
                    <input type="file" class="form-control-file" name="video" required>
                </div>
                <div class="signupbutton">
                    <input type="submit" class="btn btn-success btn-lg" name="upload" value="Submit">
                </div>
            </form>
        </div>
    </header>
</body>
</html>
