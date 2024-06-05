

<!DOCTYPE html>
<html lang="en">
 <head>
<meta http-equiv="refresh" content="30;url=index.php">
     <meta http-equiv='cache-control' content='no-cache'>

     <meta http-equiv='expires' content='0'>

     <meta http-equiv='pragma' content='no-cache'>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>PRAHLADMCA</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="icon" type="image/x-icon" href="curly.png">
 </head>
 <style>
 .notification-box {
  position: fixed;
  z-index: 99;
  top: 130px;
  right: 30px;
  width: 50px;
  height: 50px;
  text-align: center;
}
.notification-bell {
  animation: bell 1s 1s both infinite;
}
.notification-bell * {
  display: block;
  margin: 0 auto;
  background-color: #22BC22;
  box-shadow: 0px 0px 15px #fff;
}
.bell-top {
  width: 6px;
  height: 6px;
  border-radius: 3px 3px 0 0;
}
.bell-middle {
  width: 25px;
  height: 25px;
  margin-top: -1px;
  border-radius: 12.5px 12.5px 0 0;
}
.bell-bottom {
  position: relative;
  z-index: 0;
  width: 32px;
  height: 2px;
}
.bell-bottom::before,
.bell-bottom::after {
  content: '';
  position: absolute;
  top: -4px;
}
.bell-bottom::before {
  left: 1px;
  border-bottom: 4px solid #fff;
  border-right: 0 solid transparent;
  border-left: 4px solid transparent;
}
.bell-bottom::after {
  right: 1px;
  border-bottom: 4px solid #fff;
  border-right: 4px solid transparent;
  border-left: 0 solid transparent;
}
.bell-rad {
  width: 8px;
  height: 4px;
  margin-top: 2px;
  border-radius: 0 0 4px 4px;
  animation: rad 1s 2s both infinite;
}
.notification-count {
  position: absolute;
  z-index: 1;
  top: -6px;
  right: -6px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  font-size: 18px;
  border-radius: 50%;
  background-color: #ff4927;
  color: #fff;
  animation: zoom 3s 3s both infinite;
}
@keyframes bell {
  0% { transform: rotate(0); }
  10% { transform: rotate(30deg); }
  20% { transform: rotate(0); }
  80% { transform: rotate(0); }
  90% { transform: rotate(-30deg); }
  100% { transform: rotate(0); }
}
@keyframes rad {
  0% { transform: translateX(0); }
  10% { transform: translateX(6px); }
  20% { transform: translateX(0); }
  80% { transform: translateX(0); }
  90% { transform: translateX(-6px); }
  100% { transform: translateX(0); }
}
@keyframes zoom {
  0% { opacity: 0; transform: scale(0); }
  10% { opacity: 1; transform: scale(1); }
  50% { opacity: 1; }
  51% { opacity: 0; }
  100% { opacity: 0; }
}
@keyframes moon-moving {
  0% {
    transform: translate(-200%, 600%);
  }
  100% {
    transform: translate(800%, -200%);
  }
}

/* LOGO */
.logo {
 font-size: 28px;
}
body {
	padding: 0;
	margin: 0;
}
.container1 {
	position: relative;
	margin-top: 100px;
}
nav {
	position: fixed;
	z-index: 10;
	left: 0;
	right: 0;
	top: 0;
	font-family: 'Montserrat', sans-serif;
	padding: 0 5%;
	height: 100px;
    background-color: teal;
}
nav .logo {
	float: left;
	width: 40%;
	height: 100%;
	display: flex;
	align-items: center;
	font-size: 24px;
	color: #fff;
}
nav .links {
	float: right;
	padding: 0;
	margin: 0;
	width: 60%;
	height: 100%;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
nav .links li {
	list-style: none;
}
nav .links a {
	display: block;
	padding: 1em;
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
}
#nav-toggle {
	position: absolute;
	top: -100px;
}
nav .icon-burger {
	display: none;
	position: absolute;
	right: 5%;
	top: 50%;
	transform: translateY(-50%);
}
nav .icon-burger .line {
	width: 30px;
	height: 5px;
	background-color: #fff;
	margin: 5px;
	border-radius: 3px;
	transition: all .3s ease-in-out;
}
@media screen and (max-width: 768px) {
	nav .logo {
		float: none;
		width: auto;
		justify-content: center;
	}
	nav .links {
		float: none;
		position: fixed;
		z-index: 9;
		left: 0;
		right: 0;
		top: 100px;
		bottom: 100%;
		width: auto;
		height: auto;
		flex-direction: column;
		justify-content: space-evenly;
		background-color: rgba(0,0,0,.8);
		overflow: hidden;
		box-sizing: border-box;
		transition: all .5s ease-in-out;
	}
	nav .links a {
		font-size: 20px;
	}
	nav :checked ~ .links {
		bottom: 0;
	}
	nav .icon-burger {
		display: block;
	}
	nav :checked ~ .icon-burger .line:nth-child(1) {
		transform: translateY(10px) rotate(225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(3) {
		transform: translateY(-10px) rotate(-225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(2) {
		opacity: 0;
	}
	
}

.youtube-link {
	position: fixed;
	left: 20px;
	bottom: 20px;
	color: #000;
	text-decoration: none;
	font-size: 12px;
}
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
* {
  box-sizing: border-box;
}
 	 html * {
 font-family: "Audiowide", sans-serif;
 // font-family: "Permanent Marker", cursive;
}
body{
  padding: 10px;
}
.card{
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
  text-align: center;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}

.card-1{
  background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-2{
   background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-3{
   background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}
.card-4{
  background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}
@media(max-width: 990px){
  .card{
    margin: 5px;
  }
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
.string {
  display: flex;
  flex-direction: column;
  text-align: center;
  animation: move 4s infinite;
}

.greeting {
  position: relative;
  top: 7.6vmin;
  animation: white-out 5s infinite;
}



.en {
  color: #FFFFFF;
}



@keyframes move {
  25% {
    transform: translatey(-5.8vmin);
    opacity: 1;
  }
  50% {
    transform: translatey(-11vmin);
  }
  75% {
    transform: translatey(-16.5vmin);
  }
}
.hr{
    border: 2px solid #6c5ce7;
  border-radius: 0.2em;
    display: block;
    width: 150px;
    position: relative;
    margin: 5px auto;
    text-align: center;
    background-color: #a29bfe;
	
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 270px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

 </style>
 <body>
 <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
  <a href="#popup1">
  <div class="notification-box">
    <span class="notification-count">1</span>
    <div class="notification-bell">
      <span class="bell-top"></span>
      <span class="bell-middle"></span>
      <span class="bell-bottom"></span>
      <span class="bell-rad"></span>
    </div>
  </div>
  </a>
     
    
<nav>
	<input id="nav-toggle" type="checkbox">
<div class="logo">
<div class="string"><P class="greeting en">PRAHLAD<strong>MCA</strong></P></div>
</div>
	<ul class="links">
	  <li><a href="/" >Home</a></li>
         <li><a href="/auth.php" >Upload Files</a></li>
         <li><a href="/auth1.php" >Upload News</a></li>
           <li><a href="/registration.php" >Register</a></li>
         <li><a href="/" >Contact</a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>
<div class="container1">
 <div id="popup1" class="overlay">
	<div class="popup">
		<h2><u>Notification</u></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			COA Assignment-1,2 & 3 Uploaded.
		</div>
	</div>
</div>
 <div class="container">
  <div class="row">
 <a style="text-decoration:none;"href="news.php">
  <div class="col-md-4">
  <div class="card card-1"> 
   <h3>NEWS</h3>
      <p>Here You Can See All NEWS</p>
    </div><br>
  </div>
  </a>
 <a style="text-decoration:none; "href="/assignmentsemchooser.html">
  <div class="col-md-4">
  <div class="card card-2"> 
   <h3>ASSIGNMENTS</h3>
      <p>Here You Can See All Subject Assignments Notes</p>
    </div><br>
  </div>
  </a>
<a style="text-decoration:none; "href="JavaScript:void(0);" onclick="alert('Under Construction...!')">
  <div class="col-md-4">
    <div class="card card-3">
      <h3>Labs</h3>
      <p>Here You Can See All Subject Labs Notes</p>
    </div><br>
  </div>
  </a>
  <a style="text-decoration:none; "href="pypapersemchooser.html">
  <div class="col-md-4">
    <div class="card card-4">
      <h3>Previous Year Papers</h3>
      <p>Here You Can See All Subject Previous Year Papers</p>
     
    </div><br>
  </div>
</a>  
</div>
</div>

</div>

 </body>
</html>