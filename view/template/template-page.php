<div class="row container-principale">
    <div class="col-6 d-flex align-items-center">
        <div class="contain">
            <div class="row" id="block-left-top">
                <div class="col" id="modeJeuxContainer">
                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 'jouer';

                    switch ($page) {
                        case 'jouer':
                            include('./view/components/jouer.php');
                            break;
                        case 'mode-jeux':
                            include('./view/components/mode-jeux.php');
                            break;
                    }
                    ?>
                </div>
            </div>
            <div class="row" id="block-left-bottom">
                <div class="col">
                    <?php
                    include('./view/components/classement.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 block-right d-flex justify-content-center align-items-center">
        <div>
            <?php
            include './view/components/demo-grille.php';
            ?>
        </div>
    </div>
</div>
<script src="./js/structure.js"></script>