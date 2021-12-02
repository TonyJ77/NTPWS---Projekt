<?php 

	print '

	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<header>
	<img class="header-image" src="images/banner.jpg" />
	<nav>
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">News</a></li>
		<li><a href="index.php?menu=3">Contact</a></li>
		<li><a href="index.php?menu=4">About</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Register</a></li>
			<li><a href="index.php?menu=6">Sign In</a></li>
			<li><a href="index.php?menu=7">Weather</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Weather</a></li>
			<li><a href="index.php?menu=8">Admin</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		print '
	</nav>
	</header>';
?>