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
include('config.php');

    $sql = "SELECT images FROM materials";


$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <title>Study Materials | EduNotesHub</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <style id='global-styles-inline-css' type='text/css'>
        body {font-family: Arial, Helvetica, sans-serif; background: url(../images/bg-hero.png) no-repeat fixed 50%;}
        input[type=text] {padding: 10px; margin-right: 10px; border: 1px solid #ccc; border-radius: 5px; flex: 1;}
        form {border: 3px solid #f1f1f1; display: flex; align-items: center; padding: 10px; border-radius: 5px;}
        .button {background-color: rgb(32 106 227 / 50%); border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;}
        .file-name {color: #00ab6b;}
    </style>
    <link rel="stylesheet" id="wf-style-css" href="Layout/themes/bolly4u/style.css?ver=1.3" type="text/css" media="all" />
</head>
<body class="home blog font-sans bg-white dark:bg-night-300">
   <?php include 'blog/header.php';?>

<div class="container mt-4 -mb-4 max-w-6xl mx-auto">
  
    <div class="menu-featured-container">
        <table id="materialsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td class="file-name"><?php echo htmlspecialchars($row['images']); ?></td>
                        <td>
                            <a href="mfiles/<?php echo $row['images']; ?>" download class="btn btn-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#materialsTable').DataTable({
            "pagingType": "full_numbers",
            "language": {
                "paginate": {
                    "first": "<<",
                    "last": ">>",
                    "next": ">",
                    "previous": "<"
                }
            }
        });
    });
</script>

</body>
</html>
