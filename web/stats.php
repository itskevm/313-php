<?php
  session_start();

  if (!isset($_SESSION['login_status'])) {
		$_SESSION['login_status'] = False;
	}
?>

<?php 
  require "dbConnect.php";
	$db = get_db();
	
	$statement = $db->prepare("SELECT team_name, team_id FROM team");
	$statement->execute();

	$badGet = True;
	if (isset($_GET['team'])) {
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$team = $row['team_name'];
			$teamID = $row['team_id'];
			if (ucfirst($_GET['team']) == $team) {
				$badGet = False;
				break;
			}
		}
		if ($badGet)
		{
			echo "bad link";
			die();
		}
	}
	
?>

<!DOCTYPE html>

<html lang="en-us">
<head>
	<link rel="icon" href="favicon.ico">
	<meta charset="utf-8">
	<title>Stats | Competitive Sports</title>
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
		  <li><a class="active" href="stats.php">Stats</a></li>
		  <li><a href="index.php">Teams</a></li>
		  <li><a href="about.php">About</a></li>
	  </ul>
	</div>
  <div class="mainbox">
		<?php if (isset($_GET['team']) && !$badGet) {echo "<h1>" . $team . " Stats</h1>";}  
					else echo "<h1>Competitive Stat Leaders</h1>";
		?>
    <h3>Offensive Leaders</h3>
		<h3>Defensive Leaders</h3>
		
		
		<p><b>This page</b> is yet to be developed.</p>
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