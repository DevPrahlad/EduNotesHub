<?php
session_start();
error_reporting(0);
if(empty($_SESSION['email'])) { 
    $redirect_url = urlencode($_SERVER['REQUEST_URI']);
    header('Location: userarea/userlogin.php?redirect=' . $redirect_url);
    exit;
}
if(!empty($_SESSION['email'])) {
    $usernames = $_SESSION['email'];
}
?>

<?php
include 'db.php';

// Fetch semesters and subjects for dropdowns
$semesters = $conn->query("SELECT id, name FROM semesters");
$subjects = $conn->query("SELECT id, name, semester_id FROM subjects");

// Initialize variables
$selected_semester_id = isset($_POST['semester_id']) ? $_POST['semester_id'] : '';
$selected_subject_id = isset($_POST['subject_id']) ? $_POST['subject_id'] : '';

// Pagination variables
$limit = 4; // Number of lab notes per page
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch total number of lab notes
$sql_count = "
    SELECT COUNT(*) AS total 
    FROM lab_notes 
    JOIN subjects ON lab_notes.subject_id = subjects.id 
    JOIN semesters ON lab_notes.semester_id = semesters.id
";

if ($selected_semester_id) {
    $sql_count .= " WHERE lab_notes.semester_id = $selected_semester_id";
    if ($selected_subject_id) {
        $sql_count .= " AND lab_notes.subject_id = $selected_subject_id";
    }
} elseif ($selected_subject_id) {
    $sql_count .= " WHERE lab_notes.subject_id = $selected_subject_id";
}

$result_count = $conn->query($sql_count);
$total_lab_notes = $result_count->fetch_assoc()['total'];
$total_pages = ceil($total_lab_notes / $limit);

// Fetch lab notes based on search criteria and pagination
$sql = "
    SELECT 
        lab_notes.id, 
        lab_notes.title, 
        lab_notes.description, 
        lab_notes.file_path, 
        lab_notes.upload_date, 
        subjects.name AS subject_name, 
        semesters.name AS semester_name 
    FROM lab_notes 
    JOIN subjects ON lab_notes.subject_id = subjects.id 
    JOIN semesters ON lab_notes.semester_id = semesters.id
";

if ($selected_semester_id) {
    $sql .= " WHERE lab_notes.semester_id = $selected_semester_id";
    if ($selected_subject_id) {
        $sql .= " AND lab_notes.subject_id = $selected_subject_id";
    }
} elseif ($selected_subject_id) {
    $sql .= " WHERE lab_notes.subject_id = $selected_subject_id";
}

$sql .= " LIMIT $limit OFFSET $offset";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function filterSubjects() {
            var semesterId = document.getElementById('semester').value;
            var subjects = document.getElementsByClassName('subject-option');
            for (var i = 0; i < subjects.length; i++) {
                if (subjects[i].dataset.semesterId == semesterId || semesterId == '') {
                    subjects[i].style.display = 'block';
                } else {
                    subjects[i].style.display = 'none';
                }
            }
        }

        function goToPage() {
            var page = document.getElementById('goto-page').value;
            document.getElementById('page').value = page;
            document.getElementById('search-form').submit();
        }

        function resetPage() {
            document.getElementById('page').value = 1;
        }
    </script>
      <style>
        body{background:url(../images/bg-hero.png)no-repeat fixed 50%;
        }
    </style>
</head>
<body>
       <?php include 'blog/header.php';?>
    <div class="container">
       

        <form id="search-form" method="post" action="" class="mb-4">
            <input type="hidden" id="page" name="page" value="1">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="semester">Semester</label>
                    <select id="semester" name="semester_id" class="form-control" onchange="filterSubjects(); resetPage();">
                        <option value="">Select Semester</option>
                        <?php while ($row = $semesters->fetch_assoc()): ?>
                            <option value="<?= $row['id'] ?>" <?= $selected_semester_id == $row['id'] ? 'selected' : '' ?>>
                                <?= $row['name'] ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject_id" class="form-control" onchange="resetPage();">
                        <option value="">Select Subject</option>
                        <?php while ($row = $subjects->fetch_assoc()): ?>
                            <option class="subject-option" data-semester-id="<?= $row['semester_id'] ?>" value="<?= $row['id'] ?>" <?= $selected_subject_id == $row['id'] ? 'selected' : '' ?>>
                                <?= $row['name'] ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="elogo.jpg" class="card-img-top" alt="Lab Note Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['title'] ?></h5>
                                <p class="card-text"><?= $row['description'] ?></p>
                                <a href="<?= $row['file_path'] ?>" class="btn btn-primary">Download</a>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Upload Date: <?= $row['upload_date'] ?></small><br>
                                <small>Subject: <?= $row['subject_name'] ?></small><br>
                                <small>Semester: <?= $row['semester_name'] ?></small>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">No lab notes found</div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination Controls -->
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                    <a class="page-link" href="#" onclick="document.getElementById('page').value = <?= $page - 1 ?>; document.getElementById('search-form').submit();" tabindex="-1">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                        <a class="page-link" href="#" onclick="document.getElementById('page').value = <?= $i ?>; document.getElementById('search-form').submit();"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
                    <a class="page-link" href="#" onclick="document.getElementById('page').value = <?= $page + 1 ?>; document.getElementById('search-form').submit();">Next</a>
                </li>
            </ul>
        </nav>

        <div class="text-center my-4">
            <label for="goto-page">Go to page:</label>
            <input type="number" id="goto-page" min="1" max="<?= $total_pages ?>" value="<?= $page ?>" class="form-control d-inline w-auto">
            <button type="button" onclick="goToPage()" class="btn btn-primary">Go</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
