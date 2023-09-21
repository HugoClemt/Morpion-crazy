<div class="col">
  <h2>Meilleurs joueurs...</h2>
  <?php
  include('./config/cnx.php');
  $query = "SELECT * FROM score ORDER BY point DESC LIMIT 3";
  $result = $mysqli->query($query);
  if ($result->num_rows > 0) {
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
      echo '<li>' . $row["name"] . ' - Points: ' . $row["point"] . '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>Aucune donnée à afficher.</p>';
  }
  $mysqli->close();
  ?>
</div>