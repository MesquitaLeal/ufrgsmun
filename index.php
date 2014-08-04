<!DOCTYPE html>
<html lang="en">
	<head>
		<title>UFRGSMUN 2014</title>
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta charset="utf-8">
		<meta property="og:title" content="UFRGSMUN 2014" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="UFRGSMUN is an academic simulation where the participants act as representatives of the worlds's nations in one of the many organs to be simulated." />
		<meta property="og:url" content="http://www.ufrgs.br/ufrgsmun/2014/index.php" />
		<meta property="og:image" content="http://www.ufrgs.br/ufrgsmun/2014/images/ufrgsmun_facebook.jpg" />
		<link rel="icon" href="images/favicon.ico" />
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.css">
		<link type="text/css" rel="stylesheet" href="main2.css">
	</head>

	<body>
		<div class="container-fluid">

				<!-- Menu -->
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  					<div class="container-fluid">

  						<div class="navbar-fixed-top navbar-top col-md-12">
  							<div class="container-fluid">
  								<a href="mailto:ufrgsmun@ufrgs.com.br" alt="Enviar e-mail"><i class="fa fa-envelope fa-lg"></i></a>
  								<a href="https://www.youtube.com/ufrgsmun" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
  								<a href="https://plus.google.com/112578532170821947016" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
  								<a href="https://www.facebook.com/ufrgsmun" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
  								<a href="https://twitter.com/ufrgsmun" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
  							</div>
  						</div>
  						<div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						    	<span class="icon-bar"></span>
						    </button>
						    <a class="navbar-brand" href="index.php"><img src="images/ufrgsmunbranco.png" width="130px" /></a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active" id="home-link"><a href="index.php"></a></li>
								<li class="dropdown">
									<a href="?page=about" class="dropdown-toggle" data-toggle="dropdown">
										About Us <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="?page=about&section=mun">What is a MUN?</a></li>
										<li><a href="?page=about&section=meet">Meet Us</a></li>
										<li><a href="?page=about&section=history">Our History</a></li>
										<li><a href="?page=about&section=projects">Partner Projects</a></li>
										<li><a href="?page=about&section=partners">Sponsors</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="?page=conference" class="dropdown-toggle" data-toggle="dropdown">
										Conference Info <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<!--<li><a href="?page=about&section=policies">General Policies</li>
										<li><a href="?page=about&section=meet">Calendar</a></li>
										<li><a href="?page=about&section=social">Social Events</a></li>-->
										<li><a href="?page=conference&section=location">Location</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="?page=apply" class="dropdown-toggle" data-toggle="dropdown">
										Apply <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<!--<li><a href="#">How to register</a></li>
										<li><a href="#">Fees and dates</a></li>
										<li><a href="#">Register Forms</a></li>
										<li><a href="#">Payment</a></li>-->
										<li><a href="?page=apply&section=countries">Country Matrix</a></li>
									</ul>

								</li>
								<li class="dropdown">
									<a href="?page=committees">
										Committees <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="?page=committees&section=adb">ADB</a></li>
										<li><a href="?page=committees&section=disec">DISEC</a></li>
										<li><a href="?page=committees&section=icj">ICJ</a></li>
										<li><a href="?page=committees&section=ipc">IPC</a></li>
										<li><a href="?page=committees&section=unsc">UNSC</a></li>
										<li><a href="?page=committees&section=wec">WEC</a></li>
										<li><a href="?page=committees&section=wsis">WSIS</a></li>
										<li><a href="?page=committees&section=zopacas">ZOPACAS</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="?page=preparation">
										Preparation <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="?page=preparation&section=procedures">Rules of Procedures</a></li>
										<li><a href="?page=preparation&section=paper">Position Paper</a></li>
										<li><a href="?page=preparation&section=study">Study Guides</a></li>
										<li><a href="?page=preparation&section=schedule">Schedule</a></li>
										<li><a href="?page=preparation&section=logistics">Logistics</a></li>
										<li><a href="?page=preparation&section=links">Useful links</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>


			<?php

			$page = (isset($_GET['page']))? $_GET['page'] : '';

			switch ($page) {
				case '':
					require 'home.php';
					break;

				case 'about':
					require 'about/index.php';
					break;

				case 'committees':
					require 'committees/index.php';
					break;

				case 'apply':
					require 'apply/index.php';
					break;

				case 'preparation':
					require 'preparation/index.php';
					break;

				case 'conference':
					require 'conference/index.php';
					break;

				default:
					require '404.php';
					break;
			}

			?>


			<div class="row applyNow">
				<p>
					Have you not registered yet?<a href="?page=apply">Apply now</a>
				</p>
			</div>

			<footer>
				<div class="row footer-links hidden-xs">
					<div class="col-md-2">
						<p>About Us</p>
						<ul class="footer">
							<li><a href="?page=about&section=mun">What is a MUN?</a></li>
							<li><a href="?page=about&section=meet">Meet Us</a></li>
							<li><a href="?page=about&section=history">Our History</a></li>
							<li><a href="?page=about&section=projects">Partner Projects</a></li>
							<li><a href="?page=about&section=partners">Sponsors</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p>Conference Info</p>
						<ul class="footer">
							<li><a href="?page=conference&section=location">Location</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p>Apply</p>
						<ul class="footer">
							<li><a href="?page=apply&section=countries">Country Matrix</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p>Committees</p>
						<ul class="footer">
							<li><a href="?page=committees&section=adb">ADB</a></li>
							<li><a href="?page=committees&section=disec">DISEC</a></li>
							<li><a href="?page=committees&section=icj">ICJ</a></li>
							<li><a href="?page=committees&section=ipc">IPC</a></li>
							<li><a href="?page=committees&section=unsc">UNSC</a></li>
							<li><a href="?page=committees&section=wec">WEC</a></li>
							<li><a href="?page=committees&section=wsis">WSIS</a></li>
							<li><a href="?page=committees&section=zopacas">ZOPACAS</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p>Preparation</p>
						<ul class="footer">
							<li><a href="?page=preparation&section=procedures">Rules of Procedures</a></li>
							<li><a href="?page=preparation&section=paper">Position Paper</a></li>
							<li><a href="?page=preparation&section=study">Study Guides</a></li>
							<li><a href="?page=preparation&section=schedule">Schedule</a></li>
							<li><a href="?page=preparation&section=logistics">Logistics</a></li>
							<li><a href="?page=preparation&section=links">Useful links</a></li>
						</ul>
					</div>
				</div>
				<div class="row footer-copyright">
					<p>UFRGSMUN 2014</p>
					<p>Website developed by <a href="mailto:mesquitaleal@gmail.com">Marcelo Leal</a></p>
				</div>
			</footer>
		</div>


		<script type="text/javascript" src="js/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>

</html>
