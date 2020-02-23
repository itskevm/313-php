<?php
  session_start();
  if (!isset($_SESSION['validation_fail'])) {
	  // if we're entering without having tried to log in yet,
	  // then lets say we havent failed validation (for the p tag)
	  $_SESSION['validation_fail'] = False;
	  $_SESSION['login_status'] = False;
	  unset($_SESSION['username'], $_SESSION['password']);
  }

  if ($_SESSION['login_status']) {
	  // if we're logged in, redirect immediately to their account info
	header('Location: account.php');
	exit();
  }
  else {
	  // unset credentials again, just extra precaution
	  // even though we are not labeled as signed-in
	unset($_SESSION['username'], $_SESSION['password']);
  }

  require "dbConnect.php";
  $db = get_db();
?>

<!DOCTYPE html>

<html lang="en-us">
<head>
  	<link rel="icon" href="favicon.ico">
	<meta charset="utf-8">
	<title>Login | Competitive Sports</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="BYUI Women's Competitive Stuff">
  	<meta name="author" content="Kevin Matos">
  	<link rel="stylesheet" href="main.css">
  	<style>
    h3 {
    	margin: 0;
    }

    ul.teamlinks, .teamlinks li {
    	display:inline;
    	padding: 0;
    	text-align: left;
	}
		
	label {
		font-family: 'ubuntu',sans-serif;
		color: #4b4c4d;
	}
	</style>
</head>

<body>
	<div class="firnav">
		<span class="left">
			<a href="https://campusrec.byui.edu/">
			<img src="https://campusrec.byui.edu/Content/Images/byuidaho-logo.png"
				alt="schoolLogo" id="icon"></a>
		</span>
		<span class="right">
			<a href="/login.php"><img src="https://freesvg.org/img/abstract-user-flat-3.png"
				alt="login" id="icon"></a>
		</span>
		<span class="texto">
			<?php 
				if (!$_SESSION['login_status'])
					echo "<p>Guest</p>";
				else
					echo "<p>" . $_SESSION['username'] . "</p>";
			?>
		</span>
	</div>
	<div class="secnav">
		<ul class="navbar">
				<li><a href="soon.html">Schedule</a></li>
				<li><a href="stats.php">Stats</a></li>
				<li><a href="index.php">Teams</a></li>
				<li><a href="about.php">About</a></li>
		</ul>
	</div>
  <div class="mainbox">
		<h1>Login</h1>
		<?php
			if ($_SESSION['validation_fail']) {
				echo
				'<p class="warning">User info not found.</p>';	
				$_SESSION['validation_fail'] = false;
			}
		?>
		<p class="neutral">Please enter your credentials.<br>Contact the admin if you need access.</p>
		<div class="loginform">
			<form name="login" action="/validate.php" method="post">
				<input type="hidden" id="form_name" name="form_name" value="login">			
				<label for="email">Email address</label><br>
	  			<input type="text" class="textboxes" id="email" name="email" required><br>
				<label for="password">Password</label><br>
				<input type="password" class="textboxes" id="password" name="password" required><br>
				<input type="submit" id="submitter" value="Login"><br><br>
			</form>
		</div>
	</div>
</body>