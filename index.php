<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morpion Crazy - DEV</title>
    <link rel="stylesheet" type="text/css" href="./stylesheet/style.css" />
    <link href="./config/cnx.php" />
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <button>Jouer !</button>
        </div>
        <div class="col">
        <?php
            include('./config/cnx.php');
            $query = "SELECT * FROM score ORDER BY point DESC LIMIT 3";
            $result = $mysqli->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col">';
                    echo '<p>' . $row["name"] . ' - Points: ' . $row["point"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Aucune donnée à afficher.</p>';
            }
            $mysqli->close();
            ?>
        </div>
      </div>
      <div class="row quadrillage">
        <div class="col">
          <input type="text" id="case-1" />
          <input type="text" id="case-2" />
          <input type="text" id="case-3" />
        </div>
        <div class="col">
          <input type="text" id="case-4" />
          <input type="text" id="case-5" />
          <input type="text" id="case-6" />
        </div>
        <div class="col">
          <input type="text" id="case-7" />
          <input type="text" id="case-9" />
          <input type="text" id="case-10" />
        </div>
      </div>
    </div>
  </body>
</html>
