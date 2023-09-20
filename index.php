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
                <input type="text" id="0" onclick="exec(cases[0]);" readonly>
                <input type="text" id="1" onclick="exec(cases[1]);" readonly>
                <input type="text" id="2" onclick="exec(cases[2])" readonly>
            </div>
            <div class="col">
                <input type="text" id="3" onclick="exec(cases[3]);" readonly>
                <input type="text" id="4" onclick="exec(cases[4]);" readonly>
                <input type="text" id="5" onclick="exec(cases[5]);" readonly>
            </div>
            <div class="col">
                <input type="text" id="6" onclick="exec(cases[6]);" readonly>
                <input type="text" id="7" onclick="exec(cases[7]);" readonly>
                <input type="text" id="8" onclick="exec(cases[8]);" readonly>
            </div>
      </div>
    </div>
    <script src="tic.js"></script>
  </body>
</html>
