<div class="row">
    <div class="col-6 block-left-top">test2
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'jouer';

        switch ($page) {
            case 'jouer':
                include('./view/components/jouer.php');
                break;
            case 'mode-jeux':
                include('../components/mode-jeux.php');
                break;
        }
        ?>

        <div class="row">
            <div class="col block-left-bottom">test3
                <?php
                include('../components/classement.php');
                ?>
            </div>
        </div>

    </div>
    <div class="col-6 block-right">test1
        <?php
        include '../components/demo-grille.php';
        ?>

    </div>
</div>