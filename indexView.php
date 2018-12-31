<?php $title = 'Webloc, un service qui facilite la gestion des locataires saisonniers de vos logements.'; ?>

<?php ob_start(); ?>

<div class="container">
    <!-- En-tête-->
    <?php require('header.php');?>

    <!-- Contenu de la page Le body-->
    <div>

        <!-- container des cartes réceptionniste et logeur-->
        <div class="row">

            <!-- Carte réceptionniste -->
            <div class="col l6 s12">
                <div class="card">
                    <div class="card-image">
                        <img src="images/hand-shake.jpg">
                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="subscribeUserView.php"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">
                            Réceptionniste
                        </span>
                        <p>
                            Augmentez vos revenus
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carte logeur -->
            <div class="col l6 s12">
                <div class="card">
                    <div class="card-image">
                        <img src="images/good-job.jpg">

                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="subscribeUserView.php"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">
                            Logeur
                        </span>
                        <p>
                            Simplifiez votre location
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Le footer -->
    <?php require('footer.php');?>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
</div>