<div class="row aaa">
        <h2 id="title-mode">Quel de mode jeux, vous voulez choisir ?</h2>
        <p id="buttonMode">
            <button class="btn btn-primary" id="soloButton" type="button" data-toggle="collapse" data-target="#modalSolo" aria-expanded="false" aria-controls="collapseExample">
                Contre un robot
            </button>
            <button class="btn btn-primary" id="multiButton" type="button" data-toggle="collapse" data-target="#modalMulti" aria-expanded="false" aria-controls="collapseExample">
                1 VS 1
            </button>
        </p>
        <div class="collapse" id="modalSolo">
            <div class="card card-body">
                <input type="text" id="pseudoSolo" placeholder="Entrez votre pseudo">

            </div>
        </div>

        <form label="infoMulti" method="post" action="./model/add_pseudo.php">
            <div class="collapse" id="modalMulti">
                <div class="card card-body">
                    <input type="text" name="pseudoMulti1" id="pseudoMulti1" placeholder="Entrez le premier pseudo" required="required">
                    <input type="text" name="pseudoMulti2" id="pseudoMulti2" placeholder="Entrez le second pseudo" required="required">
                </div>
            <button class="btn btn-primary" type="submit" >Jouer</button>
        </form>
    </div>