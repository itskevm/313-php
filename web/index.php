<?php
  require "dbConnect.php";
  $db = get_db();
?>

<!DOCTYPE html>

<html lang="en-us">
<head>
  <link rel="icon" href="favicon.ico">
	<meta charset="utf-8">
	<title>BYUI Teams | Competitive Sports</title>
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
</style>
</head>

<body>
  <ul class="navbar">
      <li><a href="soon.html">Schedule</a></li>
      <li><a href="soon.html">Stats</a></li>
      <li><a class="active" href="index.php">Teams</a></li>
      <li><a href="soon.html">About</a></li>
  </ul>
  <div class="mainbox">
		<h1>BYU-I Teams</h1>
		<div class="allteams">	
			<?php
				$statement = $db->prepare("SELECT team_name FROM team");
				$statement->execute();
				while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
					$name = $row['team_name'];
					echo "
					<div class='oneteam'>
						<h3>$name</h3>
						<ul class='teamlinks'>
							<li><a href='" . strtolower($name) . "_stats.html'>Stats</a></li>
							<li class='divideme'> | </li>
							<li><a href='" . strtolower($name) . "_schedule.html'>Schedule</a></li>
							<li class='divideme'> | </li>
							<li><a href='roster.php?team=" . strtolower($name) . "'>Roster</a></li>
						</ul>
					</div>";
				}
    	?>
		</div>
	</div>
</body>