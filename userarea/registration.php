<?php

include('../config.php');

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $rollno = mysqli_real_escape_string($con, $_POST['rollno']);
   $university = mysqli_real_escape_string($con, $_POST['university']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5(mysqli_real_escape_string($con, $_POST['password']));
   $cpass = md5(mysqli_real_escape_string($con, $_POST['cpassword']));
   $gender = mysqli_real_escape_string($con, $_POST['gender']);
   $date = mysqli_real_escape_string($con, $_POST['date']);
   $phone = mysqli_real_escape_string($con, $_POST['phone']);
   $course = mysqli_real_escape_string($con, $_POST['course']);

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_img/'.$image;

   $select = mysqli_prepare($con, "SELECT * FROM user_form WHERE email = ?");
   mysqli_stmt_bind_param($select, "s", $email);
   mysqli_stmt_execute($select);
   mysqli_stmt_store_result($select);
   $count = mysqli_stmt_num_rows($select);

   if($count > 0){
      $message[] = 'Email already exists'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password does not match!';
      }elseif($image_size > 5000000){
         $message[] = 'Image size is too large!';
      }else{
         $query = mysqli_prepare($con, "INSERT INTO user_form(name, rollno, university, email, password, gender, date, phone, course, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
         mysqli_stmt_bind_param($query, "ssssssssss", $name, $rollno, $university, $email, $pass, $gender, $date, $phone, $course, $image);
         
         if(mysqli_stmt_execute($query)){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            
            $adminemail = "prahlad.singh.education@gmail.com";
            $subject = "New user registration";
            $message = "A new user has registered.\n\nName: $name\nEmail: $email\nDOB: $date\nRoll Number: $rollno";

            mail($adminemail, $subject, $message);
            
            header('location:userlogin.php');
         }else{
            $message[] = 'Registration failed!';
         }
      }
   }
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register | EduNotesHub</title>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2268170979958753"
     crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
  label {
    font-weight: 600;
    color: #666;
}
body {
  background: #f1f1f1;
  background:url(../images/bg-hero.png)no-repeat fixed 50%;
}
.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -3rem;
}
      </style>
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container mt-2">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t4 mb-4">
           <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
       <h2 class="text-center text-info">Register Now</h2>
        
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-f">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name." required>
      </div>
     
      <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email."  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
      </div>
 <div class="col-sm-6 form-group">
        <label for="sex">Course</label>
        <select id="qualification" name="course" class="form-control browser-default custom-select">
          <option value="MCA">MCA</option>
          <option value="BCA">BCA</option>
          <option value="PGDCA">PGDCA</option>
        </select>
      </div>
      
      <div class="col-sm-4 form-group">
        <label for="State">University</label>
        <input type="text" class="form-control" name="university" id="university" placeholder="Enter your university name." >
      </div>
      <div class="col-sm-2 form-group">
        <label for="zip">Roll NO.</label>
        <input type="text" class="form-control" name="rollno" id="rollno" placeholder="Roll NO."  >
      </div>
       <div class="col-sm-6 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone"   required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <input type="Date" name="date" class="form-control" id="date" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <select id="gender" name="gender" class="form-control browser-default custom-select">
          <option value="MALE">Male</option>
          <option value="FEMALE">Female</option>
          <option value="DIVIDED">Divided</option>
        </select>
      </div>
    
      
      <div class="col-sm-6 form-group">
        <label for="pass">Password</label>
        <input type="Password" name="password" class="form-control" id="password" placeholder="Enter your password." required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="pass2">Confirm Password</label>
        <input type="Password" name="cpassword" id="myInput" class="form-control" id="cpassword" placeholder="Re-enter your password." required>
      </div>
     
      
       <div class="col-sm-6 form-group">
        <label for="profile">Profile Photo</label><br>
        <input type="file" name="image" class="box" id="image" accept="image/jpg, image/jpeg, image/png">
      </div>

      <div class="col-sm-12 form-group mb-0">
         <input type="submit" name="submit" value="register now" class="btn">
          
      </div>
<br>
      <div class="col-sm-6 form-group">
          <br>
                <p>already have an account? <a href="userlogin.php">login now</a></p>
      </div>
    </div>
  </form>
  
</div>

<!-- partial -->
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
