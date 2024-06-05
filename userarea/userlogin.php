<?php

error_reporting(0);
include('../config.php');

// Check if user is already logged in, if yes, redirect to main page
if(isset($_SESSION['email'])) {
    header('Location: ../main.php');
    exit; // Stop further execution
}

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_prepare($con, "SELECT * FROM user_form WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($query, "ss", $email, md5($password));
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);
    $count = mysqli_stmt_num_rows($query);

    if($count > 0){
        mysqli_stmt_bind_result($query, $id, $email, $password); // Update with actual column names
        mysqli_stmt_fetch($query);
        $_SESSION['email'] = $email;

        if ($_SESSION['email'] == 'prahladsingh7512@gmail.com') {
            header('location:../main.php');
            exit; // Stop further execution
        } else {
            $adminemail = "prahlad.singh.education@gmail.com";
            $subject = "User Login Alert";
            $message = "A user has logged in.\nEmail: $email";

            mail($adminemail, $subject, $message);
            header('location:../main.php');
            exit; // Stop further execution
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2268170979958753"
     crossorigin="anonymous"></script>
   <linl rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
   
   <linl rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | EduNotesHub</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
h5 {
  text-align: right;
}

input[type="checkbox"] {   }

</style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
<h5> <input type="checkbox" onclick="myFunction()">&nbsp;Show Password</h5>
      <input id="myInput" type="password" name="password" placeholder="enter password" class="box" required>
     <h5>Forgot <a href="forgot_password.php">password?</a></h5>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="registration.php">register now</a></p>
   </form>

</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>