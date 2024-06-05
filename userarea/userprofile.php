<?php

include('../config.php');

$emails = $_SESSION['email'];

if(!isset($emails)){
   header('location:userlogin.php');
};

if(isset($_GET['logout'])){
   unset($emails);
   session_destroy();
   header('location:userlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UserProfile | EduNotesHub</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $query = mysqli_query($con, "SELECT * FROM `user_form` WHERE email = '$emails'") ;
              $ret=mysqli_num_rows($query);
         if($ret > 0){
            $fetch = mysqli_fetch_array($query);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="../uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="updateprofile.php" class="btn">Update Profile</a>
       <?php
              if (isset($_SESSION['email'])) {
                if ($_SESSION['email'] == 'prahladsingh7512@gmail.com') {
                    echo"  <a href='../auth4.php' class='btn'>Upload Files</a>";
          echo"  <a href='../auth2.php' class='btn'>Manage Users</a>";

            
              
                }
              }
              ?>
      <a href="logout.php?logout=<?php echo $emails; ?>" class="delete-btn">Logout</a>
      <p>new <a href="userlogin.php">login</a> or <a href="registration.php">register</a></p>
   </div>

</div>

</body>
</html>