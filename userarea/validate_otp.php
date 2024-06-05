<?php
session_start();

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $otp = $_POST['otp'];

    if ($otp == $_SESSION['otp']) {
        header("Location: update_password.php");
        exit();
    } else {
        $errorMessage = "Invalid OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate OTP</title>
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

input[type="text"],
input[type="submit"] {
   
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
        <h2>Validate OTP</h2>
         <?php if (!empty($errorMessage)): ?>
            <div class="message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <form action="" method="POST">
            <label for="otp">Enter OTP: We Have Sent To Your Email Address</label>
            <input type="text" id="otp" name="otp" required>
            <input type="submit" value="Validate OTP">
        </form>
    </div>
</body>
</html>
