<?php

error_reporting(0);
include('../config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Users | EduNotesHub</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>


  @media print {
            .delete-btn {
                display: none;
            }
        }
</style>
</head>
<body>
   
<div class="update-profile">

        <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from user_form where id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>  

   <form action="" method="post" enctype="multipart/form-data">
      <?php
        
            echo '<img src="../uploaded_img/'.$row['image'].'">';
        
        
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" name="update_name" value="<?php echo $row['name']; ?>" class="box" readonly>
            <span> Email :</span>
            <input type="email" name="update_email" value="<?php echo $row['email']; ?>" class="box"readonly>
                        <span>Gender :</span>
            <input type="text" name="update_name" value="<?php echo $row['gender']; ?>" class="box"readonly>
             <span>University :</span>
            <input type="text" name="update_university" value="<?php echo $row['UNIVERSITY']; ?>" class="box"readonly>
         </div>
         <div class="inputBox">
                      <span>Rollno :</span>
            <input type="text" name="update_name" value="<?php echo $row['rollno']; ?>" class="box"readonly>
                        <span>Phone Number :</span>
            <input type="text" name="update_name" value="<?php echo $row['phone']; ?>" class="box"readonly>
                        <span> DOB :</span>
            <input type="text" name="update_name" value="<?php echo $row['date']; ?>" class="box"readonly>
                        <span>Course :</span>
            <input type="text" name="update_name" value="<?php echo $row['course']; ?>" class="box"readonly>
         </div>
      </div>
      <a href="" class="delete-btn" onclick="printPage()">Print Page</a>
      
   </form>
<?php } ?>
</div>

  <script>
    function printPage() {
      window.print();
    }
  </script>
</body>
</html>