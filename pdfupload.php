<?php
include("config.php");


if (isset($_POST['but_upload'])) {
    $maxsize = 1280000000; 
    if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
        $pdf = $_FILES['file']['name'];
        $target_dir = "pfiles/";
        $target_file = $target_dir . $_FILES["file"]["name"];

        // Select file type
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("doc", "pdf", "mp4", "avi", "3gp", "jpeg", "jpg", "docx");

        // Check extension
        if (in_array($extension, $extensions_arr)) {
            // Check file size
            if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                $_SESSION['message'] = "File too large. File must be less than 11MB.";
            } else {
                // Upload
                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                    // Insert record
                    $query = "INSERT INTO pfiles(pdf, location) VALUES('$pdf', '$target_file')";
                    mysqli_query($con, $query);
                    $_SESSION['message'] = "Upload successfully.";
                }
            }
        } else {
            $_SESSION['message'] = "Invalid file extension.";
        }
    } else {
        $_SESSION['message'] = "Please select a file.";
    }
    header('Location: adminarea/@dmin.php');
    exit;
}

if (isset($_POST['delete_file'])) {
    $file_id = intval($_POST['file_id']);
    $query = $con->prepare("SELECT pdf, location FROM pfiles WHERE id = ?");
    $query->bind_param("i", $file_id);
    $query->execute();
    $result = $query->get_result();
    $file = $result->fetch_assoc();

    if ($file) {
        if (unlink($file['location'])) {
            $query = $con->prepare("DELETE FROM pfiles WHERE id = ?");
            $query->bind_param("i", $file_id);
            $query->execute();
            $_SESSION['message'] = "File deleted successfully.";
        } else {
            $_SESSION['message'] = "Failed to delete file.";
        }
    } else {
        $_SESSION['message'] = "File not found.";
    }
    header('Location: adminarea/@dmin.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Files Upload | EduNotesHub</title>
    <style>
        html * {
            font-family: "Audiowide", sans-serif;
            font-size: 16px;
        }
        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }
        .button {
            border: 2px solid #6c5ce7;
            padding: 2px 20px;
            border-radius: 0.2em;
            background-color: #a29bfe;
            transition: 0.3s;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #81ecec;
            border-color: #00cec9;
        }
        input[type="file"]::file-selector-button {
            border: 2px solid #6c5ce7;
            padding: 0.2em 0.4em;
            border-radius: 0.2em;
            background-color: #a29bfe;
            transition: 0.3s;
        }
        input[type="file"]::file-selector-button:hover {
            background-color: #81ecec;
            border-color: #00cec9;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
            background: rgb(255 255 255 / 25%);
        }
        #customers tr:hover {
            background-color: #ddd;
            background: rgb(255 255 255 / 25%);
        }
        #customers th {
            padding: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        div {
            text-align: center;
        }
        body {
            margin: auto;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }
        @keyframes gradient {
            0%, 100% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
        }
        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }
        .wave:nth-of-type(2) {
            bottom: -1.25em;
            animation: wave 18s linear reverse infinite;
        }
        .wave:nth-of-type(3) {
            bottom: -2.5em;
            animation: wave 20s -1s reverse infinite;
        }
        @keyframes wave {
            2%, 100% {
                transform: translateX(1);
            }
            25% {
                transform: translateX(-25%);
            }
            50% {
                transform: translateX(-50%);
            }
            75% {
                transform: translateX(-25%);
            }
        }
        input[type=text] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin: 6px 0 16px;
            resize: vertical;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
    <h1><u><b>File Upload</b></u></h1>
    <form method="post" action="" enctype='multipart/form-data'>
        <input id="fileUpload" type='file' name='file' required />
        <input class="button" type='submit' value='Upload' name='but_upload'>
    </form>

    <?php
    include_once 'config.php';

    $sql = "SELECT id, pdf FROM pfiles";
    $result = mysqli_query($con, $sql);
    ?>

    <table id="customers">
        <tr>
            <th>#</th>
            <th>File Name</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$i}</td>
                    <td><a href='pfiles/{$row['pdf']}' download>{$row['pdf']}</a></td>
                    <td>
                        <form method='post' action='' onsubmit='return confirm(\"Are you sure you want to delete this file?\");'>
                            <input type='hidden' name='file_id' value='{$row['id']}'>
                            <input class='button' type='submit' name='delete_file' value='Delete'>
                        </form>
                    </td>
                  </tr>";
            $i++;
        }
        ?>
    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_SESSION['message'])): ?>
                alert("<?php echo $_SESSION['message']; unset($_SESSION['message']); ?>");
            <?php endif; ?>
        });
    </script>
</body>
