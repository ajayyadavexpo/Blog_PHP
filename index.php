<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>MyBlog</title>
	<style type="text/css">
		.navbar{background-color: transparent;}
		.navbar a{color: white;background-color: #D86520; padding: 5px;border-radius: 2px;}
		.navbar a:hover{color: #ff8000;background-color: white;}
		#myCarousel img{width: 100%; height: 700px;}
		.col-sm-7, .col-sm-5{background-color: #ff8000;}
		.col-sm-5 .text-center{padding: 10%;color: white; margin-top: 10%;}
		.col-sm-5 .text-center p{font-size: 20px;}
		.col-sm-7 img{width: 80%;}
		.col-sm-7 a{margin-bottom: 2%;border-radius: 2px;padding: 13px; font-weight: bold;background-color:#1d2b34 ;color: white;}
		.col-sm-7 a:hover{background-color: white;color: #1d2b34; font-weight: bold;}
		footer {padding: 2%;background-color: #1d2b34;color: white;font-family: arial;font-weight: bold;}
		footer p{color: #B2B4B4;}
		hr{background-color: #B2B4B4;}
		#myCarousel .carousel-inner .btn{position: absolute;margin:5% 40%;border-radius: 2px;padding: 13px; font-weight: bold;background-color:#ff8000 ;color: white; }
		#myCarousel .carousel-inner .btn:hover{background-color: white;color: #ff8000; font-weight: bold;}
		footer .down select{background-color:#303e47;color: white;border:2px solid #303e47;padding: 4px;border-radius: 3px;}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top">
	<a href="index.php" class="navbar-brand"><img src="logo.png"width="50px" class="rounded"> MyBlog</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="login.php" class="nav-link"><b>SIGN IN</b></a></li>
		</ul>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ul>
	
	<div class="carousel-inner">

		<div class="carousel-item active">
			<a href="register.php" class="btn bnt-dark">CREATE YOUR BLOG</a>
			<div class="carousel-caption">
				<h1>Publish your passions, your way</h1>
				<p>Create a unique and beautiful blog. It’s easy and free.</p>
			</div>
			<img src="rawpixel-679094-unsplash.jpg" alt="Blogger">
		</div>
		<div class="carousel-item">
			<a href="register.php" class="btn bnt-dark">CREATE YOUR BLOG</a>
			<div class="carousel-caption">
				<h1>Publish your passions, your way</h1>
				<p>Create a unique and beautiful blog. It’s easy and free.</p>
			</div>
			<img src="ewan-robertson-208022-unsplash (1).jpg" alt="Blogger">
		</div>
		<div class="carousel-item">
			<a href="register.php" class="btn bnt-dark">CREATE YOUR BLOG</a>
			<div class="carousel-caption">
				<h1>Publish your passions, your way</h1>
				<p>Create a unique and beautiful blog. It’s easy and free.</p>
			</div>
			<img src="thought-catalog-214785-unsplash.jpg" alt="Blogger">
		</div>
	</div>
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5">
			<div class="text-center">
				<h1>Choose the perfect design</h1>
				<p>Create a beautiful blog that fits your style. Choose from a selection of easy-to-use templates – all with flexible layouts and hundreds of background images – or design something new.</p>
			</div>
		</div>
		<div class="col-sm-7">
			<img src="social-inside-furl.png">
			<a href="register.php" class="btn bnt-dark">CREATE YOUR BLOG</a>
		</div>
	</div>
</div>

<footer>
	<div class="container">
	<div class="row">
		<div class="col-sm-2">
			<h4>Help</h4>
			<p>Help Center</p>
			<p>Help Forum</p>
			<p>Video Tutorials</p>
		</div>
		<div class="col-sm-2">
			<h4>Community</h4>
			<p>Blogger Buzzz</p>
			<p>+Blogger</p>
		</div>
		<div class="col-sm-2">
			<h4>Developers</h4>
			<p>Blogger API</p>
			<p>Developer Form</p>
		</div>
	</div>
	<hr>
	<div class="down">
		<h5>Terms of Service | Privacy | Content Policy</h5>
		<select>
			<option>English</option>
			<option>Hindi</option>
			<option>Urdu</option>
		</select>
	</div>
</div>
</footer>
</body>
</html>