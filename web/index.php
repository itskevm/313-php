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
</body>