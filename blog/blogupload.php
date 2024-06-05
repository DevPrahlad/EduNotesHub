<?php
include '../config.php';

if (isset($_POST['upload'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $par1 = mysqli_real_escape_string($con, htmlspecialchars($_POST['par1']));
    $par2 = mysqli_real_escape_string($con, htmlspecialchars($_POST['par2']));
    $par3 = mysqli_real_escape_string($con, htmlspecialchars($_POST['par3']));

    $target = "uploads/" . basename($_FILES['image']['name']);
    $image = mysqli_real_escape_string($con, $_FILES['image']['name']);

    $sql = "INSERT INTO blogs (title, par1, par2, par3, imgpath) VALUES ('$title', '$par1', '$par2', '$par3', '$image')";

    if (mysqli_query($con, $sql)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            header("location: blogs.php");
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Error inserting blog: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog Upload | EduNotesHub</title>
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
        .form-control {
            margin-bottom: 1rem;
        }
        .signupbutton {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="jumbotron">
            <h1>Enter the Featured Blog Details</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Title" name="title" value="">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="par1" rows="4" cols="50" placeholder="Enter Paragraph 1"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="par2" rows="4" cols="50" placeholder="Enter Paragraph 2"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="par3" rows="4" cols="50" placeholder="Enter Paragraph 3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image"><b>Upload Image:</b></label>
                    <input type="file" class="form-control-file" name="image" value="">
                </div>
                <div class="signupbutton">
                    <input type="submit" class="btn btn-success btn-lg" name="upload" value="Submit">
                </div>
            </form>
        </div>
    </header>
</body>
</html>
