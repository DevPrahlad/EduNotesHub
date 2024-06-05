<?php

include '../config.php';

$emails = $_SESSION['email'];

if(isset($_POST['update_profile'])){

    $update_name = $_POST['update_name'];
    $update_email = $_POST['update_email'];
    $update_rollno = $_POST['update_rollno'];
    $update_phone = $_POST['update_phone'];
    $update_university = $_POST['update_university'];

    $update_query = "UPDATE `user_form` SET 
        name = '$update_name', 
        email = '$update_email', 
        rollno = '$update_rollno', 
        UNIVERSITY = '$update_university', 
        phone = '$update_phone' 
        WHERE email = '$emails'";

    mysqli_query($con, $update_query) or die('Query failed: '.mysqli_error($con));

    $old_pass = md5($_POST['old_pass']);
    $update_pass = md5($_POST['update_pass']);
    $new_pass = md5($_POST['new_pass']);
    $confirm_pass = md5($_POST['confirm_pass']);

    if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
        $user_query = mysqli_query($con, "SELECT password FROM `user_form` WHERE email = '$emails'") or die('Query failed: '.mysqli_error($con));
        $user = mysqli_fetch_assoc($user_query);

        if($update_pass != $user['password']){
            $message[] = 'Old password not matched!';
        } elseif($new_pass != $confirm_pass){
            $message[] = 'Confirm password not matched!';
        } else {
            mysqli_query($con, "UPDATE `user_form` SET password = '$confirm_pass' WHERE email = '$emails'") or die('Query failed: '.mysqli_error($con));
            $message[] = 'Password updated successfully!';
        }
    }

    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../uploaded_img/'.$update_image;

    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'Image is too large';
        } else {
            $image_update_query = mysqli_query($con, "UPDATE `user_form` SET image = '$update_image' WHERE email = '$emails'") or die('Query failed: '.mysqli_error($con));
            if($image_update_query){
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
                $message[] = 'Image updated successfully!';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | EduNotesHub</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="update-profile">

    <?php
    $query = mysqli_query($con, "SELECT * FROM `user_form` WHERE email = '$emails'") or die('Query failed: '.mysqli_error($con));
    $ret = mysqli_num_rows($query);
    if($ret > 0){
        $fetch = mysqli_fetch_assoc($query);
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <?php
        if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
        } else {
            echo '<img src="../uploaded_img/'.$fetch['image'].'">';
        }
        if(isset($message)){
            foreach($message as $msg){
                echo '<div class="message">'.$msg.'</div>';
            }
        }
        ?>
        <div class="flex">
            <div class="inputBox">
                <span>Your name:</span>
                <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
                <span>Your email:</span>
                <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                <span>Your rollno:</span>
                <input type="text" name="update_rollno" value="<?php echo $fetch['rollno']; ?>" class="box">
                <span>University:</span>
                <input type="text" name="update_university" value="<?php echo $fetch['UNIVERSITY']; ?>" class="box">
                <span>Your phone:</span>
                <input type="text" name="update_phone" value="<?php echo $fetch['phone']; ?>" class="box">
                <span>Update your pic:</span>
                <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            </div>
            <div class="inputBox">
                <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                <span>Old password:</span>
                <input type="password" name="update_pass" placeholder="Enter previous password" class="box">
                <span>New password:</span>
                <input type="password" name="new_pass" placeholder="Enter new password" class="box">
                <span>Confirm password:</span>
                <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box">
            </div>
        </div>
        <input type="submit" value="Update profile" name="update_profile" class="btn">
        <a href="userprofile.php" class="delete-btn">Go back</a>
    </form>

</div>

</body>
</html>
