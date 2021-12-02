<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<style>
		#admin li{list-style-type:none;}
		#admin li a{
			padding: 10px;
			align-items:center;
			background-color: #001f3f;
			max-width: fit-content;
			color: #FF851B;
			border-radius: 5px;
			color: #FF851B;
			display:block;
			margin-bottom:10px;
			text-decoration:none;
			margin:10px auto;
		}
		
		#admin li a:hover{
			color:#FFFFFF;
			opacity:0.85;
		}
		
		#adminPozadina{
			border: 2px solid gray;
			border-radius:10px;
			background-color:#631ef7;
			padding:5px;
			margin-bottom:20px;
		}

		</style>

		<h1>Administration</h1>
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=8&amp;action=1">Users</a></li>
				<li><a href="index.php?menu=8&amp;action=2">News</a></li>
			</ul>
			<div id=adminPozadina>';
			# Admin Users
			if ($action == 1) { include("admin/users.php"); }
			
			# Admin News
			else if ($action == 2) { include("admin/newsAdmin.php"); }
		print '
		</div>
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Please register or login using your credentials!</p>';
		header("Location: index.php?menu=6");
	}
?>