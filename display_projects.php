<?php
session_start();
error_reporting(0);
if (empty($_SESSION['email'])) { 
    header('location:userarea/userlogin.php');
    exit();
}
if (!empty($_SESSION['email'])) {
    $usernames = $_SESSION['email'];
}

include('config.php');

// Fetch project details
$sql = "SELECT id, name, domain, contact_link FROM projects";
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
    <title>Projects | EduNotesHub</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <style id='global-styles-inline-css' type='text/css'>
        body {font-family: Arial, Helvetica, sans-serif; background: url(../images/bg-hero.png) no-repeat fixed 50%;}
        .button {background-color: rgb(32 106 227 / 50%); border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;}
        .project-name {color: #00ab6b;}
    </style>
    <link rel="stylesheet" id="wf-style-css" href="Layout/themes/bolly4u/style.css?ver=1.3" type="text/css" media="all" />
    <style>
        @media (max-width: 768px) {
            /* Add your responsive CSS here */
        }
    </style>
</head>
<body class="home blog font-sans bg-white dark:bg-night-300">
   <?php include 'blog/header.php';?>

<div class="container mt-4 -mb-4 max-w-6xl mx-auto">
    <div class="menu-featured-container">
        <table id="projectsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Domain</th>
                    <th>Buy</th>
                    <th>Screenshot</th> <!-- Added column for screenshot button -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td class="project-name"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><a href="<?php echo htmlspecialchars($row['domain']); ?>" target="_blank"><?php echo htmlspecialchars($row['domain']); ?></a></td>
                        <td>
                            <a href="https://wa.me/<?php echo htmlspecialchars($row['contact_link']); ?>" target="_blank" class="btn btn-success">
                                <i class="fa fa-shopping-cart"></i> buy
                            </a>
                        </td>
                        <td>
                            <a href="display_screenshot.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
                                View Screenshot
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
        $('#projectsTable').DataTable({
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
