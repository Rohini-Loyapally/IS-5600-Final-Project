<!DOCTYPE HTML>
<html>
<head>
<title>Plants Clinic </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<!-- header -->
	<div class="banner1">
		<div class="container">
			<div class="header">
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-1">
								<li><a href="index.html">home</a></li>
								<li><a href="Logout.php">Logout</a></li>
								
									<div class="clearfix"> </div>
							</ul>
				</div>
				<div class="social">
						<ul>
							<li><a href="#"><i class="fb"></i></a></li>
							<li><a href="#"><i class="twt"></i></a></li>
							<li><a href="#"><i class="goog"></i></a></li>
								<div class="clearfix"> </div>
						</ul>
					</div>
						<div class="clearfix"> </div>
			</div>			
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				<div class="logo1">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
		</div>
	</div>
<!-- header -->
	<div class="container">
		<div class="error-404 text-center">
			<h2>
				<p></p>
				
				<?php
					$msg = $_GET['msg'];
					echo $msg;
				?>
				
                                <a href  = "registerUser.php">Go Back</a>
				
				</h2>
		</div>
	</div>
	<div class="footer">
		<div class="container">
		<p>Plants Clinic © 2022</p>
		</div>
	</div>
</body>
</html>