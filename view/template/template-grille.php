<div class="template-grille d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col">
            <?php
            include('./view/components/grille.php');
            ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keybord="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">🤖 Tu as perdu contre un robot.
                    Il va aussi, bientôt,
                    chopper votre boulot.</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="rejouerBtn">Revanche !</button>
                <button type="button" class="btn btn-secondary" id="backMenu" onclick="window.location.href = '../';">Retour au menu</button>

            </div>
        </div>
    </div>
</div>

<script src="exec.js"></script>

