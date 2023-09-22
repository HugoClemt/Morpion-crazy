<div class="row container-principale">
    <div class="col-6 d-flex align-items-center">
        <div class="contain">
            <div class="row" id="block-left-top">
                <div class="col" id="modeJeuxContainer">
                    <?php
                    $sous_page = isset($_GET['sous_page']) ? $_GET['sous_page'] : 'menu';

                    switch ($sous_page) {
                        case 'menu':
                            include('./view/components/jouer.php');
                            break;
                        case 'game-mode':
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
    <div class="col-6 block-right d-flex align-items-center justify-content-center">
        <?php
        include './view/components/grille.php';
        ?>
    </div>
</div>
<script src="./js/structure-template-page.js"></script>