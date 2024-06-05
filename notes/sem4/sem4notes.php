<?php
session_start();
error_reporting(0);
if(empty($_SESSION['email']))
{ 
    header('location:../../userarea/userlogin.php');
}
if(!empty($_SESSION['email']))
{
$usernames=$_SESSION['email'];
}
 ?>
<!DOCTYPE html>

<html>

<head>
	<title>Notes | EduNotesHub</title>

    <meta http-equiv='cache-control' content='no-cache'>

    <meta http-equiv='expires' content='0'>

    <meta http-equiv='pragma' content='no-cache'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PRAHLADMCA</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
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
	     	 html * {
   font-family: "Audiowide", sans-serif;
   //font-family: "Permanent Marker", cursive;
}
	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  font-weight: 600;
}

.heading__credits {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
}

/* CARDS */

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  text-align: center;

  margin: 20px;
  padding: 20px;
  width: 1000px;
  min-height: 50px;
  display: grid;
  grid-template-rows: -5px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

/* CARD BACKGROUNDS */

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2);
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9);
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
}

/* RESPONSIVE */

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}
.container {
  padding: 24px;
  background-color: #04AA6D;
}
 h3 {
	 font-family: Quicksand;
	// margin:-12px;
    
}
 .alert {
 height:110px;
	 width: 95%;
	 margin: 20px auto;
	 padding: 30px;
	 position: relative;
	 border-radius: 5px;
	 box-shadow: 0 0 15px 5px #ccc;
}
 .close {
	 position: absolute;
	 width: 30px;
	 height: 30px;
	 opacity: 0.5;
	 border-width: 1px;
	 border-style: solid;
	 border-radius: 50%;
	 right: 15px;
	 top: 25px;
	 text-align: center;
	 font-size: 1.6em;
	 cursor: pointer;
}
 .simple-alert {
	 background-color: #ebebeb;
	 border-left: 5px solid #6c6c6c;
}
 .simple-alert .close {
	 border-color: #6c6c6c;
	 color: #6c6c6c;
}
 .success-alert {
	 background-color: #a8f0c6;
	 border-left: 5px solid #178344;
}
 .success-alert .close {
	 border-color: #178344;
	 color: #178344;
}
 .danger-alert {
	 background-color: #f7a7a3;
	 border-left: 5px solid #8f130c;
}
 .danger-alert .close {
	 border-color: #8f130c;
	 color: #8f130c;
}
 .warning-alert {
	 background-color: #ffd48a;
	 border-left: 5px solid #8a5700;
}
 .warning-alert .close {
	 border-color: #8a5700;
	 color: #8a5700;
}
 
	</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  
<body>

      <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
<a href="#section1" >
 <div class="alert success-alert">
  <h3><b>Elective-3</b></h3>  
</div>
</a>
<a href="#section2" >
 <div class="alert alert-primary">
  <h3><b>Elective-4</b></h3>  
</div>
</a>
<a href="#section3" >
 <div class="alert danger-alert">
  <h3><b>Elective-5</b></h3>  
</div>
</a>
<div class="main-container">
 <div  id="section1">
<div class="container">
 <b><i><u>Elective-3</u></i></b>
 </div>
  <div class="cards">
    <div class="card card-1">
     
      <h2 class="card__title">Soft Computing unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Soft_Computing.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-2">
     
      <h2 class="card__title">Data Analytics unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Data_Analytics.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-3">
     
      <h2 class="card__title">SQE unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Software_Quality_Engineering.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
    
  </div><br>
</div>

<div  id="section2">
<div class="container">
 <b><i><u>Elective-4</u></i></b>
 </div>
  <div class="cards">
    <div class="card card-1">
     
    
      <h2 class="card__title">Blockchain unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Blockchain.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-2">
     
      <h2 class="card__title">IOT unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Internet_Of_Things.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-3">
     
      <h2 class="card__title">DDBMS unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Distributed_Database_System.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     
  </div><br>
</div>

<div  id="section3">
<div class="container">
 <b><i><u>Elective-5</u></i></b>
 </div>
  <div class="cards">
    <div class="card card-1">
     
      <h2 class="card__title">Mobile Computing unit 1-5(Handwritten)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../pfiles/Mobile computing all notes (1).pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-1">
     
      <h2 class="card__title">Mobile Computing unit 1-5(Digital)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../pfiles/MCA-Second Year-Mobile Computing-MCAC403.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-2">
     
      <h2 class="card__title">Computer Graphics And Animation unit 1-5(Handwritten)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../pfiles/Computer Graphics notes (1).pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-3">
     
      <h2 class="card__title">NLP unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Natural_Language_Processing.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     <div class="card card-4">
     
      <h2 class="card__title">Machine Learning unit 1-5(KPH)<pre></pre><i class="fa fa-file"></i></h2>
      <p class="card__apply">
        <a class="card__link" href="../../question_bank/video-uploads/Machine_Learning.pdf">Download Now <i class="fa fa-download"></i></i></a>
      </p>
    </div>
     
    
  </div><br>
</div>

 </div>

</body>

</html>
