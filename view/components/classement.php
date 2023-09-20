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