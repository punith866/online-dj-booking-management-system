
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script> <!-- setTimeout(hideURLbar, 0);-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script>
<div class="content">
	 <div class="container">
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li>
			  	<img src="images/weddj.jpg" alt="">
				</video>
				<div class="caption">
					<h1>Wedding Dj</h1>
					<p>Cheers to your happily ever after.</p>
				</div>
			  </li>
			  <li><img src="images/partydj.jpg" alt="">
				<div class="caption">
					<h1>Party Dj</h1>
					<p>Let the good times roll.</p>
				</div>
			  </li>
			  <li><img src="images/dhol.jpg" alt="">
				<div class="caption">
					<h1>Ceremony Music</h1>
					<p>Let the Indian-ness show!!</p>
				</div>
			  </li>
			  <li><img src="images/photobooth.jpg" alt="">
				<div class="caption">
					<h1>Photo Booth</h1>
					<p>Grab a prop & Strike a pose!!</p>
				</div>
			  </li>
			  <li><img src="images/karaoke.jpg" alt="">
				<div class="caption">
					<h1>Karaoke</h1>
					<p>Keep calm & Karaoke night.</p>
				</div>
			  </li>
			  <li><img src="images/uplighters.jpg" alt="">
				<div class="caption">
					<h1>Uplighters</h1>
					<p>Lighting for your every mood.</p>
				</div>
			  </li>
			  <li><img src="images/concert.jpg" alt="">
				<div class="caption">
					<h1>Concert</h1>
					<p>Lets go where the music is too loud.</p>
				</div>
			  </li>
			  <li><img src="images/dj.jpg" alt="">
				<div class="caption">
					<h1>Dj Nights</h1>
					<p>Life is a party!!</p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/weddj.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/partydj.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/dhol.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images/photobooth.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/karaoke.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/uplighters.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/concert.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/dj.jpg" alt=""></a></li>
			</ul>
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>
