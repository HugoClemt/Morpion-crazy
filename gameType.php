<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>


    <div class="row aaa">
        <h1 class="titleaaa">Mode de jeu ?</h1>
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modalSolo" aria-expanded="false" aria-controls="collapseExample">
                Solo
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modalMulti" aria-expanded="false" aria-controls="collapseExample">
                Multi
            </button>
        </p>
        <div class="collapse" id="modalSolo">
            <div class="card card-body">
                <input type="text" id="pseudoSolo" placeholder="Entrez votre pseudo">

            </div>
        </div>

        <form label="infoMulti" method="post" action="export_name.php">
            <div class="collapse" id="modalMulti">
                <div class="card card-body">
                    <input type="text" name="pseudoMulti1" id="pseudoMulti1" placeholder="Entrez le premier pseudo">
                    <input type="text" name="pseudoMulti2" id="pseudoMulti2" placeholder="Entrez le second pseudo">
                </div>
            <button class="btn btn-primary" type="submit" >Jouer</button>
        </form>
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
            <input class="case" type="text" id="0" onclick="exec(cases[0]);" readonly>
            <input class="case" type="text" id="1" onclick="exec(cases[1]);" readonly>
            <input class="case" type="text" id="2" onclick="exec(cases[2])" readonly>
        </div>
        <div class="col">
            <input class="case" type="text" id="3" onclick="exec(cases[3]);" readonly>
            <input class="case" type="text" id="4" onclick="exec(cases[4]);" readonly>
            <input class="case" type="text" id="5" onclick="exec(cases[5]);" readonly>
        </div>
        <div class="col">
            <input class="case" type="text" id="6" onclick="exec(cases[6]);" readonly>
            <input class="case" type="text" id="7" onclick="exec(cases[7]);" readonly>
            <input class="case" type="text" id="8" onclick="exec(cases[8]);" readonly>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>