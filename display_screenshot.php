<?php
// display_screenshot.php

// Fetch project details based on project_id passed in URL
if (isset($_GET['id'])) {
    include('config.php');

    $project_id = $_GET['id'];
    $sql = "SELECT screenshot FROM projects WHERE id = $project_id";
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='image-grid'>";
        while ($row = mysqli_fetch_assoc($result)) {
            $screenshot = $row['screenshot'];
            echo "<div class='image-item'><img src='uploads/$screenshot' alt='Project Screenshot'></div>";
        }
        echo "</div>";
    } else {
        echo "No screenshots found for this project.";
    }
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Screenshots | EduNotesHub</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; }
        .image-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
        .image-item { width: 100%; }
        .image-item img { width: 100%; height: auto; }
    </style>
</head>
<body>
    <!-- This space is intentionally left blank. You can remove this comment if necessary. -->
</body>
</html>
