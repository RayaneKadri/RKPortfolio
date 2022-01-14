    <?php $title= 'Accueil'?>
    <?php $page= 0; ?>
    <?php ob_start(); ?>
    <div class="jumbotron">
                <h1>Bienvenue</h1>
                <img src="../images/moi.PNG" alt="Ma Photo">
                <p>Je m'appelle Rayane KADRI, j'ai 19 ans et ce site a pour vocation de me présenter en tant que personne,
                    en tant qu'étudiant apprenti et candidat à l'obtention du BTS SIO (Services Informatiques aux Organisations).        
                </p>
                <a class="btn btn-primary" href="../pages/C_cv.php"_blank" role="button">En savoir plus »</a>
    </div> <!-- Emplacement pour le contenu principal de la page -->
    <?php $content = ob_get_clean(); ?>
    <?php require(__DIR__ . '/../views/templates/navbar.php'); ?>
    <?php require(__DIR__ . '/../views/templates/head.php'); ?>
   