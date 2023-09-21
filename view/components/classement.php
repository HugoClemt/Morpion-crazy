<div>
  <h2>Meilleurs joueurs...</h2>
  <ul id="classement-liste">
    <?php
    include './controller/hight_score.php';

    hight_score($hight_score);
    ?>
  </ul>
</div>