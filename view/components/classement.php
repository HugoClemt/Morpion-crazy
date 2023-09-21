<div>
  <h2>Meilleurs joueurs...</h2>
  <ul id="classement-liste" class="">
    <?php
    include_once './controller/hight_score.php';

    hight_score($hight_score);
    ?>
  </ul>
</div>