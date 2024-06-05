<?php
 include '../config.php';


 // Enable error reporting for debugging
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 if (isset($_POST['upload'])) {
     $targetvid = "video-uploads/".basename($_FILES['video']['name']);
     $target = "uploads/".basename($_FILES['image']['name']);
     $name = $_POST['mname'];
     $desc = $_POST['desc'];
     $image = $_FILES['image']['name'];
     $video = $_FILES['video']['name'];

     // Check if database connection is established
     if ($con === false) {
         die("ERROR: Could not connect to the database. " . mysqli_connect_error());
     }

     // Prepare the SQL statement
     $sql = "INSERT INTO movies (name, decription, imgpath, videopath) VALUES ('$name', '$desc', '$image', '$video')";
     
     // Attempt to execute the query
     if (mysqli_query($con, $sql)) {
         // Try to move the uploaded files
         if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid)) {
             header("Location:../adminarea/@dmin.php");
         } else {
             echo "Error uploading files.";
         }
     } else {
         echo "Error: Could not execute $sql. " . mysqli_error($conn);
     }

     // Close the connection
     mysqli_close($conn);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Video Upload | EduNotesHub</title>
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
        .card {
            background: #12192c;
            border-radius: 30px;
            height: auto;
            width: 80vw;
            max-width: 600px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            text-align: center;
            padding: 2em;
            color: #DCE35B;
        }
        .card h1 {
            margin-bottom: 1.5em;
        }
        .alert {
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Enter the Video Details</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Video Name" name="mname" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description..." name="desc" required>
            </div>
            <div class="form-group">
                <label for="image"><b>Upload Image:</b></label>
                <input type="file" class="form-control-file" name="image" required>
            </div>
            <div class="form-group">
                <label for="video"><b>Upload Video:</b></label>
                <input type="file" class="form-control-file" name="video" required>
            </div>
            <button type="submit" class="btn btn-success btn-block mt-4" name="upload">Submit</button>
        </form>
    </div>
</body>
</html>
