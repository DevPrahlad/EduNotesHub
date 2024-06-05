<?php 
    include 'config.php'; 

    if(isset($_POST['submit'])) {
        $uploadsDir = "mfiles/";
        $allowedFileType = array('jpg','pdf','jpeg' );

        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            foreach($_FILES['fileUpload']['name'] as $id=>$val) {
                $fileName = $_FILES['fileUpload']['name'][$id];
                $tempLocation = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath = $uploadsDir . $fileName;
                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)) {
                    if(move_uploaded_file($tempLocation, $targetFilePath)) {
                        $sqlVal = "('".$fileName."', '".$uploadDate."')";
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "File could not be uploaded."
                        );
                    }
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .pdf file formats allowed."
                    );
                }

                if(!empty($sqlVal)) {
                    $insert = $con->query("INSERT INTO materials (images, date_time) VALUES $sqlVal");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files couldn't be uploaded due to database error."
                        );
                    }
                }
            }
        } else {
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        }
    } 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Study Materials | EduNotesHub</title>
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
        <h1>Upload Study Materials</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="fileUpload[]" class="form-control-file" id="chooseFile" multiple>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block mt-4">Upload</button>
        </form>
        <?php if(!empty($response)) { ?>
            <div class="alert <?php echo $response["status"]; ?>">
                <?php echo $response["message"]; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
