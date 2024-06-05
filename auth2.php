<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['login']))
{
    $adminumber = $_POST['unique'];

    $query = mysqli_prepare($con, "SELECT id FROM tblverify WHERE uniquenumber = ?");
    mysqli_stmt_bind_param($query, "s", $adminumber);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);

    $ret = mysqli_stmt_num_rows($query);

    if($ret > 0)
    {
        header('location:userarea/manageuser.php');
    }
    else
    {
        echo "<script>alert('Invalid details.');</script>";
    }
}
?>
<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

  	 html * {
           font-family: "Audiowide", sans-serif;
           
      }

form {border: 3px solid #f1f1f1;}



input[type=text], input[type=password] {

  width: 100%;

  padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  box-sizing: border-box;

}



button {

  background-color: #04AA6D;

  color: white;

  padding: 14px 20px;

  margin: 8px 0;

  border: none;

  cursor: pointer;

  width: 100%;

}



button:hover {

  opacity: 0.8;

}





.container {

  padding: 16px;

}

.form-center form {

  position: absolute;

  top: 50%;

  left: 50%;

  transform: translate(-50%,-50%);

  width:60%;

}

body {

    margin: auto;

    font-family: -apple-system, BlinkMacSystemFont, sans-serif;

    overflow: auto;

    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);

    animation: gradient 15s ease infinite;

    background-size: 400% 400%;

    background-attachment: fixed;

}



@keyframes gradient {

    0% {

        background-position: 0% 0%;

    }

    50% {

        background-position: 100% 100%;

    }

    100% {

        background-position: 0% 0%;

    }

}



.wave {

    background: rgb(255 255 255 / 25%);

    border-radius: 1000% 1000% 0 0;

    position: fixed;

    width: 200%;

    height: 12em;

    animation: wave 10s -3s linear infinite;

    transform: translate3d(0, 0, 0);

    opacity: 0.8;

    bottom: 0;

    left: 0;

    z-index: -1;

}



.wave:nth-of-type(2) {

    bottom: -1.25em;

    animation: wave 18s linear reverse infinite;

    opacity: 0.8;

}



.wave:nth-of-type(3) {

    bottom: -2.5em;

    animation: wave 20s -1s reverse infinite;

    opacity: 0.9;

}



@keyframes wave {

    2% {

        transform: translateX(1);

    }



    25% {

        transform: translateX(-25%);

    }



    50% {

        transform: translateX(-50%);

    }



    75% {

        transform: translateX(-25%);

    }



    100% {

        transform: translateX(1);

    }

}



</style>

</head>

<body>

 <div>

     <div class="wave"></div>

     <div class="wave"></div>

     <div class="wave"></div>

  </div>

<div class="form-center">

<form action="" method="post">



  <div class="container">

    <label for="uname"><b>Enter Passcode</b></label>

 <p>Hint:6 Digits.Not Your PIN Code</p>

    <input type="password"  name="unique" required>

        

    <button type="submit" name="login">Verify</button>





  </div>



</form>

</div>

</body>

</html>