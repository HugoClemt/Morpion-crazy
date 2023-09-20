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

        <form label="infoMulti" method="post" action="multi.php">
            <div class="collapse" id="modalMulti">
                <div class="card card-body">
                    <input type="text" name="pseudoMulti1" id="pseudoMulti1" placeholder="Entrez le premier pseudo">
                    <input type="text" name="pseudoMulti2" id="pseudoMulti2" placeholder="Entrez le second pseudo">

                </div>
            <button class="btn btn-primary" type="submit" >Jouer</button>
        </form>
    </div>