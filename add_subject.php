<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester_id = $_POST['semester_id'];
    $name = $_POST['name'];

    $sql = "INSERT INTO subjects (semester_id, name) VALUES ('$semester_id', '$name')";
    if ($conn->query($sql) === TRUE) {
        $response = array(
            "status" => "alert-success",
            "message" => "New subject added successfully"
        );
    } else {
        $response = array(
            "status" => "alert-danger",
            "message" => "Error: " . $sql . "<br>" . $conn->error
        );
    }
}

$result = $conn->query("SELECT id, name FROM semesters");
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add Subject | EduNotesHub</title>
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
        <h1>Add New Subject</h1>
        <form method="post" action="">
            <div class="form-group">
                <select name="semester_id" class="form-control" required>
                    <option value="" disabled selected>Select Semester</option>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Subject Name" required>
            </div>
            <button type="submit" class="btn btn-success btn-block mt-4">Add Subject</button>
        </form>
        <?php if(!empty($response)) { ?>
            <div class="alert <?php echo $response["status"]; ?>">
                <?php echo $response["message"]; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
