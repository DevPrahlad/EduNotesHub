
<?php



include('../config.php');

// For deleting    


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>All Post | EduNotesHub</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/mediumish.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">

<div class="container">
	<!-- Begin Logo -->
	
	<a class="navbar-brand" href="blogs.php">
	<img src="Color logo - no background.png" alt="logo">
	</a>
	
	
</div>
</nav>
<!-- Begin Site Title
================================================== -->
<div class="container">
	
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>All Posts</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
	
  <?php

$ret=mysqli_query($con,"select *from  blogs ORDER BY CreationDate DESC ");

$cnt=1;
while ($row=mysqli_fetch_array($ret)) {



?>

		<!-- begin post -->
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.php?viewid=<?php echo $row['mid'];?>">
					<?php
						echo'<div class="thumbnail" style="background-image:url(uploads/'.$row["imgpath"].');">';
						echo'</div>';
						?>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="post.php?viewid=<?php echo $row['mid'];?>"><?php  echo $row['title'];?></a></h2>
						
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<img class="author-thumb" src="../our_team/image3.jpg" alt="Sal">
								</span>
								<span class="author-meta">
								<span class="post-name">Prahlad Singh</span><br/>
								<span class="post-date"><?php echo $row['CreationDate'];?></span><span class="dot"></span><span class="post-read">6 min read</span>
								</span>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <?php 
		 $cnt=$cnt+1;
}?>

 
		
	</div>
	</section>
	<!-- End Featured

	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2023 EduNotesHub
		</p>
		
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>