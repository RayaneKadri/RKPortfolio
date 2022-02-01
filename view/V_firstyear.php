<?php $title= 'Projet de première année'?>
<?php $page= 2; ?>
<?php ob_start(); ?>
<section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Première projet de 1ère année</h1>
                <img src="../public/images/warning.PNG" alt="photo représentant un panneau Danger">
                <p class="lead text-muted">jusqu'à prèsent , je n'ai pas eu encore la possibilité d'aborder de projet,
                    je suis actuellement en auto formation sur les langages que je vais utiliser au sein de mon entreprise (DIRISI CDAD TOULON).
                    Pour avoir plus de précision sur les langages, je vous invite à aller sur la page <a href="../pages/C_cv.php">CV</a>.
                </p>
            </div>
</section>
<?php $content= ob_get_clean(); ?>
<?php require(__DIR__ . '/../view/templates/head.php'); ?>
<?php require(__DIR__ . '/../view/templates/navbar.php'); ?>