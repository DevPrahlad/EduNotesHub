<?php
include 'db.php';

$response = []; // Initialize as an array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester_id = $_POST['semester_id'];
    $subject_id = $_POST['subject_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_path = 'uploads/' . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        $sql = "INSERT INTO previous_year_papers (semester_id, subject_id, title, description, file_path) VALUES ('$semester_id', '$subject_id', '$title', '$description', '$file_path')";
        if ($conn->query($sql) === TRUE) {
            $response = [
                'status' => 'alert-success',
                'message' => 'New previous year paper uploaded successfully'
            ];
        } else {
            $response = [
                'status' => 'alert-danger',
                'message' => "Error: " . $sql . "<br>" . $conn->error
            ];
        }
    } else {
        $response = [
            'status' => 'alert-danger',
            'message' => 'Sorry, there was an error uploading your file.'
        ];
    }
}

$semesters = $conn->query("SELECT id, name FROM semesters");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Previous Year Paper</title>
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
    <script>
        function fetchSubjects(semesterId) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "get_subjects.php?semester_id=" + semesterId, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var subjects = JSON.parse(xhr.responseText);
                    var subjectSelect = document.getElementById('subject');
                    subjectSelect.innerHTML = '<option value="">Select Subject</option>';
                    for (var i = 0; i < subjects.length; i++) {
                        var option = document.createElement('option');
                        option.value = subjects[i].id;
                        option.text = subjects[i].name;
                        subjectSelect.appendChild(option);
                    }
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <div class="card">
        <h1>Upload Previous Year Paper</h1>
        <form method="post" enctype="multipart/form-data" action="">
            <div class="form-group">
                <label for="semester">Semester:</label>
                <select id="semester" name="semester_id" class="form-control" onchange="fetchSubjects(this.value)">
                    <option value="">Select Semester</option>
                    <?php while ($row = $semesters->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <select id="subject" name="subject_id" class="form-control">
                    <option value="">Select Subject</option>
                    <!-- Subjects will be populated here based on the selected semester -->
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-success btn-block mt-4">Upload Previous Year Paper</button>
        </form>
        <?php if (isset($response['message'])): ?>
            <div class="alert <?php echo $response['status']; ?>">
                <?php echo $response['message']; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>