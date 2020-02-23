<?php
  session_start();

  if (!isset($_SESSION['login_status'])) {
		$_SESSION['login_status'] = False;
	}
?>

<!DOCTYPE html>

<html lang="en-us">
<head>
	<link rel="icon" href="favicon.ico">
	<meta charset="utf-8">
	<title>About | Competitive Sports</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nothing yet">
	<meta name="author" content="Kevin Matos">
	<link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="main.css">
	<style>
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
		  <li><a class="active" href="about.php">About</a></li>
	  </ul>
	</div>
  <div class="mainbox">
		<h1>About</h1>
    <h3>Purpose</h3>
    <p>This website was made to simplify and improve the experience
    of coordinators, coaches, and players in the Competitive Basketball
    leagues at Brigham Young University - Idaho.</p>
    <h3>Creator</h3>
    <p>Kevin Matos is the original creator of this website. He began developing
    this website as a project for a Web Engineering class that used both front
    end and back end development.</p>
    <h3>Current Features</h3>
    <p>Currently, this system allows you to view rosters. If
    logged in as an authorized user, then you are able to add and remove players
    from teams.</p>
    <h3>Planned Features</h3>
    <p><b>Picture uploading</b> will allow authorized users to directly upload
    the pictures of players on try out days, along with the rest of their info.</p>
    <p><b>Player pages</b> will allow all users to see a single players stats and
    info all in one place.</p>
    <p><b>League wide scheduling</b> will allow all users to see every game happening
    during the season, along with specifying a single specific team's schedule.</p>
    <p><b>Stat tracker</b> will allow all users to see league wide leaders and individual's
    stats, or view them by team. This is by far the most ambitious feature, as the stats
    will not only be stored player by player, game by game, but it will allow authorized
    users to enter stats directly onto the site. From those individual stats, all of the
    team stats will be calculated and compared with one another.</p>
    <p><b>More features</b> to be announced.</p>
	</div>
  <footer>
    <p><a class="sender" href="home.php">Home</a> |
      <a class="sender" href="directory.html">CS 313 Assignments</a> |
      <a class="sender" href="#cabeza">Return to top</a><br>
      <a href="https://youtube.com/kevm967">
        <img src="https://i.ibb.co/6vBchr4/2019-LOGO-1.png"
          alt="KevMGamingLogo" style="vertical-align:middle" width="80" height="80" /></a>
      KevMGaming © <?php echo date("Y");?></p>
  </footer>
</body>