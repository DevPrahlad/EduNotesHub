

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

<h2>Operating System</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiGz9donHRrE9I3Mwn6XdP8p"></iframe>
</div>
<br>
<hr>
<br>
<h2>Theory of automata and formal languages</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiFM9Lj5G9G_76adtyb4ef7i"></iframe>
</div>
<br>
<hr>
<br>

<h2>DBMS</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiFAN6I8CuViBuCdJgiOkT2Y"></iframe>
</div>
<br>
<hr>
<br>

<h2>DSA</h2>
<p> Full Playlist</p>
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiHcmS4i14bI0VrMbZTUvlTa"></iframe>
</div>
<br>
<br>


</body>
</html>
