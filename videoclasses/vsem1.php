
<?php
session_start();
error_reporting(0);
if(empty($_SESSION['email']))
{ 
    header('location:../userarea/userlogin.php');
}
if(!empty($_SESSION['email']))
{
$usernames=$_SESSION['email'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{ background:url(../images/bg-hero.png)no-repeat fixed 50%;}
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
</style>
</head>
<body>

<h2>Computer Organization and Architecture</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiHMonh3G6QNKq53C6oNXGrX "></iframe>
</div>
<br>
<hr>
<br>
<h2>Discrete Mathematics</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLU6SqdYcYsfJ27O0dvuMwafS3X8CecqUg"></iframe>
</div>

</body>
</html>