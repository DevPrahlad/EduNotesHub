<?php
include 'db.php';

if (isset($_GET['semester_id'])) {
    $semester_id = $_GET['semester_id'];
    $subjects = $conn->query("SELECT id, name FROM subjects WHERE semester_id = $semester_id");

    $subjects_array = array();
    while ($row = $subjects->fetch_assoc()) {
        $subjects_array[] = $row;
    }

    echo json_encode($subjects_array);
}

$conn->close();
?>
