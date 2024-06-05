
<?php
session_start();
error_reporting(0);
if(empty($_SESSION['email']))
{ 
    header('location:userarea/userlogin.php');
}
if(!empty($_SESSION['email']))
{
$usernames=$_SESSION['email'];
}
 ?>
<html>
<head>


    <meta http-equiv='cache-control' content='no-cache'>

    <meta http-equiv='expires' content='0'>
<title>Assignments | EduNotesHub</title>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 font-family: "Audiowide", sans-serif;
 // font-family: "Permanent Marker", cursive;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 50vh;
  background: #232427;
}

body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1100px;
  margin: 5px 0;
}

body .container .card {
  position: relative;
  min-width: 300px;
  height: 250px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

body .container .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container .card:nth-child(2) .box .content a {
  background: #e91e63;
}

body .container .card:nth-child(3) .box .content a {
  background: #23c186;
}

body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -5px;
  right: 20px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
body .container .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

</style>
</head>
<body>
<div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
        <h2>I</h2>
        <h3>SEMESTER 1</h3>
        <a href="vsem1.php">SEE</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2>II</h2>
        <h3>SEMESTER 2</h3>
        <a href="vsem2.php">SEE</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2>3</h2>
        <h3>SEMESTER 3</h3>
        <a href="javascript:void(0)"onclick="alert('Not Yet')")>SEE</a>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="box">
      <div class="content">
        <h2>4</h2>
        <h3>SEMESTER 4</h3>
        <a href="javascript:void(0)"onclick="alert('Not Yet')")>SEE</a>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>