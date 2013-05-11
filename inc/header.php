<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css" media="all" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="css/override.css" media="all" />
	<script type="text/jacascript" src="js/modernizr.js"></script>
</head>
<body style="background-image:url('img/wavegrid.png')">

	<div class="container hidden-phone">
	  	<div class="masthead">
		<h3 class="muted">David Karasek <small id="devtag"><?php $x = rand(0,5); echo $webDev[$x]; ?></small></h3>
			<div class="navbar">
				<div class="navbar-inner center">
				<div class="container">
					<ul class="nav nav-tabs">
						<li class="<?php if ($section == "resume") { echo "active"; } ?>"><a href="index.php">Resume</a></li>
						<li class="<?php if ($section == "skills") { echo "active"; } ?>"><a href="skills.php">Skills</a></li>
						<li class="<?php if ($section == "portfolio") { echo "active"; } ?>"><a href="portfolio.php">Portfolio</a></li>
						<li class="<?php if ($section == "work") { echo "active"; } ?>"><a href="work.php">Work</a></li>
						<li class="<?php if ($section == "about") { echo "active"; } ?>"><a href="about.php">About</a></li>
						<li class="<?php if ($section == "contact") { echo "active"; } ?>"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				</div>
			</div><!-- /.navbar -->
		</div>
    </div>

    <div class="container visible-phone">
		
			<div class="navbar navbar-fixed-top center">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav nav-tabs">
							<li class="<?php if ($section == "resume") { echo "active"; } ?>"><a href="index.php">Resume</a></li>
							<li class="<?php if ($section == "skills") { echo "active"; } ?>"><a href="skills.php">Skills</a></li>
							<li class="<?php if ($section == "contact") { echo "active"; } ?>"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div><!-- /.navbar -->
			<h4 class="muted">David Karasek <small id="devtag"><?php $x = rand(0,5); echo $webDev[$x]; ?></small></h4>
    </div>