        <?php $title= 'Nolark'; ?>
        <?php ob_start(); ?>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Site Internet Nolark</h1>
                <p class="lead text-muted">Cette activité m'a permis d'apprendre à développer 
                    en HTML et CSS en utilisant l'IDE "Oracle Netbeans", j'ai pu apprendre à  me servir
                    de l'outil de développeur intégré dans le navigateur Internet, cette activité m'a aussi
                    permis d'apprendre à utiliser "Open Street Map", ainsi que de rendre un site Internet
                    "responsive" afin d'avoir un affichage adapté aux téléphones, tablettes, etc... .
                </p>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="../images/devtool.PNG" alt="Outil développeur dans le navigateur Internet">
                            <div class="card-body">
                                <p class="card-text">Analyse du code html/css à l'aide de "Devtool".</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="../images/ops.PNG" 
                                 alt="Image de carte Open Street Map">
                            <div class="card-body">
                                <p class="card-text">Emplacement de Nolark à l'aide de Open Street Map</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="../images/responsive.PNG" alt="Page web 'responsive' adaptée pour affichage mobile/tablette">
                            <div class="card-body">
                                <p class="card-text">Affichage des pages en mode "responsive"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $content = ob_get_clean(); ?>
        <?php include(__DIR__ . '/../views/templates/head.php'); ?>