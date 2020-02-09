<?php

  require "dbConnect.php";
  $db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teams</title>
</head>

<body>
  <div>
    <h1>Teams</h1>
    
    <?php
      $statement = $db->prepare("SELECT * FROM team");
      $statement->execute();

      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
      {
        $id = $row['team_id'];
        $name = $row['team_name'];
        $winCount = $row['wins'];
        $lossCount = $row['losses'];
        echo "<p><strong>$name: $winCount - $lossCount</strong></p>";
      }
    ?>

  </div>
  <div>
    <h1>Spartans Roster</h1>
    
    <?php
        $statement = $db->prepare("SELECT first_name, last_name, jersey_number FROM player WHERE team_id=4");
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
          $firstName = $row['first_name'];
          $lastName = $row['last_name'];
          $jerseyNumber = $row['jersey_number'];
          echo "<p><strong>$firstName $lastName ($jerseyNumber)</strong></p>";
        }
    ?>
  </div>
</body>