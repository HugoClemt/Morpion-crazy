<!-- ModalMulti -->
<div class="modal fade" id="ModalMulti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mode 1 VS 1</h5>
            </div>
            <div class="modal-body">
                <form label="infoMulti" method="post" action="./model/add_pseudo.php">
                    <div class="card card-body">
                        <input type="text" name="pseudoMulti1" id="pseudoMulti1"
                            placeholder="Entrer le pseudo du 1re joueur" required="required">
                        <input type="text" name="pseudoMulti2" id="pseudoMulti2"
                            placeholder="Entrer le pseudo du 2eme joueur" required="required">

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary"><a href="?page=template-grille">Jouer</a></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ModalSolo -->
<div class="modal fade" id="ModalSolo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mode "Contre un robot</h5>
            </div>
            <div class="modal-body">
                <form label="infoSolo" method="post" action="./model/add_pseudo.php">
                    <div class="card card-body">
                        <input type="text" name="pseudoMulti1" id="pseudoMulti1" placeholder="Entrer votre pseudo"
                            required="required">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary"><a href="?page=template-grille">Jouer</a></button>
                </form>
            </div>
        </div>
    </div>
</div>