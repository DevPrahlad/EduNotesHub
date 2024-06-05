<?php


include '../config.php';

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);

    // Check if email exists in the database
    $stmt = $con->prepare("SELECT id FROM user_form WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate OTP and send it to the user's email
        $otp = mt_rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['username'] = $username;

        // Compose email message
        $subject = 'Your OTP for password reset';
        $message = 'Your OTP is: ' . $otp;

        // Send email (you need to implement this part)
        if (mail($username, $subject, $message)) {
            header("Location: validate_otp.php");
            exit();
        } else {
            $errorMessage = "Failed to send OTP. Please try again.";
        }
    } else {
        $errorMessage = "Email not found in our records.";
    }

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2268170979958753" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | EduNotesHub</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
       body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    width: 100%;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h3 {
    text-align: center;
    color: #333;
    background-color: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
}

.message {
    color: #721c24;
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="email"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #dc3545;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #c82333;
}

    </style>
</head>
<body>
   
<div class="form-container">
    <form action="" method="POST">
        <h3>Forgot Password</h3>
        <?php if (!empty($errorMessage)): ?>
            <div class="message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <label for="email">Email:</label>
        <input type="email" id="email" name="username" placeholder="Enter your email" required>
        <input type="submit" value="Reset Password">
    </form>
</div>

</body>
</html>
