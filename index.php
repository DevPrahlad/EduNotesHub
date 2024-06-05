<?php
include('config.php');

//select values from visitor_counter table
$sql     = "SELECT * FROM visitor_counter";
$result  = mysqli_query($con, $sql);
$row     = mysqli_fetch_array($result);
$counter = $row['counts'];

// setting counter = 1, if we have no counts value
if (empty($counter)) {
  $counter = 1;
  $sql1    = "INSERT INTO visitor_counter(counts) VALUES('$counter')";
  $result1 = mysqli_query($con, $sql1);
}


// Incrementing counts value
$plus_counter = $counter+1;
$sql2         = "update visitor_counter set counts='$plus_counter'";
$result2      = mysqli_query($con, $sql2);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
    <link rel="icon" type="image/x-icon" href="Color logo - no background.png">
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

     <title>EduNotesHub-Discover,Learn,Excel</title>
<meta name="generator" content="Hugo 0.111.3">
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bundle.min.5ecece40c4a4857e59874b619fa3184e818d5e137eb2fc985b8625162c15d01c.css">
<link rel="stylesheet" href="css2?family=Poppins:wght@600">
<link rel="stylesheet" href="css2-1?family=Plus+Jakarta+Sans:wght@400">
<link rel="icon" type="image/x-icon" href="logo4.jpg">
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');


</style>


</head>
<body>
<header>
<nav class="navbar navbar-expand-xl bg-light">
<div class="container fixed-container">
<a class="navbar-brand" href="controlled-clock/clock.html">
  
<picture>
<img class="img-fluid" data-src="aktulogo1.ico" src="aktulogo1.ico" alt="" title="Dr.A.P.J. Abdul Kalam Technical University">
 
</picture>
<b>AKTU</b>


</a>







<div class="d-flex justify-content-between hide-desktop order-xl-last">
<a href="userarea/userlogin.php" class="btn white">Login</a>
<a href="userarea/registration.php" class="btn purple">Register <img class="img-fluid" src="images/arrow.png" alt="->"></a>
</div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.php"><b>Home</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="blog/blogs.php"><b>Blogs</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="about_us.php"><b>About Us</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact_us.php"><b>Contact Us</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="privacy_policy.php"><b>Privacy Policy</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="welcome.php">You are visitor no.<b><?php print $counter; ?></b></a>
</li>
</ul>
<div class="show-mobile">
<div class="d-flex justify-content-between block_me">
<a href="userarea/userlogin.php" class="btn white mb-2">Login</a>
<a href="userarea/registration.php" class="btn purple mb-2">Sign Up <img class="img-fluid" src="images/arrow.png" alt="->"></a>
</div>
</div>
</div>
</div>
</nav>
</header>
<section class="hero">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>EduNotesHub</h1>
<div class="d-flex justify-content-center usp">
<p>| AKTU | Dr.A.P.J. Abdul Kalam Technical University | MCA | Assignments | Study Notes | Lab Notes | Handwritten Notes | E-Books | Quantums | KPH | Circulars | Notices | Previous Year Papers | Projects | Study Materials | Video Gallery | Image Gallery |</p>
</div>
<a href="userarea/userlogin.php" class="btn purple">Login Now
<img class="img-fluid" src="images/arrow.png" alt="->">
</a>

</div>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="col-12">


</div>
</div>
</div>
<section class="usp">
<div class="container">
<div class="row">
<div class="col-md-12 text-center spacer">
<h2>Free Study Material For MCA Students</h2>
</div>
</div>
<div class="row gx-5">
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/free-hosting.png" src="images/free-hosting.png" alt="">
</picture>
<h3>Regular Updates</h3>
<p>
Continuous addition of new study materials and resources.
</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/uptimes.png" src="images/uptimes.png" alt="Uptime">
</picture>
<h3>Study Notes</h3>
<p>
Comprehensive and concise notes to aid learning and revision.
</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/unlimited-hosting.png" src="images/unlimited-hosting.png" alt="">
</picture>
<h3>Assignments</h3>
<p>
Various assignments and practice exercises provided for each subject.
</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/free.png" src="images/free.png" alt="">
</picture>
<h3>Lab Notes</h3>
<p>
Step-by-step instructions, procedures, and explanations for laboratory experiments.
</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/no-ads.png" src="images/no-ads.png" alt="No Ads">
</picture>
<h3>Student-Focused</h3>
<p>
Tailored resources to meet the needs of students at different educational level.
</p>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="wrapper">
<picture>
<img class="img-fluid" data-src="/images/domain.png" src="images/domain.png" alt="">
</picture>
<h3>User-Friendly</h3>
<p>
Easy navigation and search functionality for quick access to desired content.
</p>
</div>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="col-12">


</div>
</div>
</div>
<section class="cta">
<div class="container">
<div class="row gx-5">
<div class="col-lg-7">
<div class="content_wrapper mb-5 mb-lg-0">
<h2>
<span class="subtitle">
What you get with our website
</span>
 Features
</h2>
<p>
edunoteshub is one of the largest online portals for MCA students to download and access educational resources. We provide a comprehensive platform for MCA students to download and access study materials, assignments, and lab notes.
</p>
<ul class="bullets row">
<li class="col">Subject Notes</li>
<li class="col">Assignments</li>
<li class="col">Lab Notes</li>
<li class="col">Video Classes</li>
<li class="col">Previous Year Papers</li>
<li class="col">Circulars</li>
<li class="col">Video Gallery</li>
<li class="col">Image Gallery</li>
<li class="col">E-Books</li>
</ul>
</div>
</div>
<div class="col-lg-5 order-lg-first">
<div class="form_wrapper mb-5 mb-lg-0">
<h2>Important Links</h2>
<a href="https://aktu.ac.in/" class="btn blue">AKTU Official Website</a>
<a href="https://erp.aktu.ac.in/webpages/oneview/OneView.aspx" class="btn blue">AKTU Result</a>
<a href="https://aktu.ac.in/syllabus%202022-2023.html" class="btn blue">Syllabus 2022-2023</a>
<a href="https://erp.aktu.ac.in/Webpages/Public/Circular/CircularForWebsite.aspx" class="btn blue">AKTU Circulars</a>
</div>
</div>
</div>
</div>
</section>
<section class="faq">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>
<span class="subtitle">Still have doubts? </span>
FAQ - Common questions before registration
</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="accordion" id="faqAccordion">
<div class="accordion-item">
<h2 class="accordion-header" id="headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
How can I access educational resources on EdunotesHub?
</button>
</h2>
<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
Visit our website and Login to find and download a wide range of free educational resources like notes, assignments, eBooks, and lab notes.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Are the resources on EdunotesHub free?
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
Yes, all resources on EdunotesHub are completely free to download.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingFour">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
How often do you add new resources to EdunotesHub?
</button>
</h2>
<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
We regularly update EdunotesHub with new resources to provide students with the latest educational materials. Check the website regularly or subscribe to our newsletter for updates.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingFive">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
Are the resources on EdunotesHub specific to a particular university or syllabus?
</button>
</h2>
<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
Our resources cater to the general MCA and BCA syllabi, so they can be helpful regardless of the university you are affiliated with.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingSix">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
Can I request specific resources that are not available on EdunotesHub?
</button>
</h2>
<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
Yes, you can send us a request through the "Contact Us" page on our website, and we will do our best to provide the requested resources if possible.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingSeven">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
Are the resources on EdunotesHub reviewed for accuracy and quality?
</button>
</h2>
<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
Yes, we have a dedicated team that reviews all submitted resources to ensure accuracy and quality before publishing them on the website.
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingEight">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
Can I share the resources from EdunotesHub with others?
</button>
</h2>
<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
<div class="accordion-body">
<p>
 Yes, you are welcome to share the resources from EdunotesHub with your classmates, friends, or anyone who can benefit from them.
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="col-12">

</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12">


</div>
</div>
</div>

<footer>
<div class="container">
<div class="row">
<div class="col-md-3">
<ul>
<li></li>
</ul>
</div>
<div class="col-md-3">
<a href="about_us.php" class="btn blue">Meet The Team</a>
<ul>
<li></li>
</ul>
</div>
<div class="col-md-3">
<a href="Reviews/review.php" class="btn blue">Feedback</a>
<ul>
<li></li>
</ul>
</div>
<div class="col-md-3">
<ul>
<li></li>
</ul>
</div>
</div>
</div>
</footer>
<section class="bottom">
<div class="bottom_cta">
<a href="userarea/userlogin.php" class="btn purple">
Login
<img class="img-fluid" src="images/arrow.png" alt="->">
</a>
</div>

<div class="container">
    
<div class="row gx-5">
<div class="col-md-6 text-start">© 2023 EduNotesHub. All rights reserved.</div>
</div>
</div>
</section>

<script type="text/javascript" src="js/bundle.min.171d6ecbf56d2c736a3606581c28b1ad67061d4dcf14cb3f1ab0c631e03db1ae.js"></script>


</body>
</html>
