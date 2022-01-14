<?php $title= 'CV'; ?>
<?php $page= 1 ; ?>
<?php ob_start(); ?>
<div class="jumbotron">
            <div class="container">
                <div class="row cadreCV">
                    <div id="cv-entete" class="text-center">
                        <div id="cv-photo">
                            <img src="../images/Moi.png" alt="Ma photo d'identité">
                        </div>
                        <div id="cv-intro">
                            <h1>Voici mon CV</h1>
                        </div>
                    </div>
                </div>



                <div class="row cadreCV">
                    <div class="col-xs-12 col-sm-7">
                        <!-- Partie gauche -->
                        <div class="rubrique clearfix">
                            <h2><span class="fa fa-comment"></span> En quelques mots...</h2>
                            <p>J'ai 19 ans, j'habite Toulon et je suis passionné d'informatique depuis toujours.
                                 Je suis actuellement un BTS Services Informatiques aux Organisations en apprentissage ce qui
                                 me permet d'apprendre les bases du développement Informatique afin d'en faire mon future
                                 métier&nbsp;!
                            </p>
                        </div>

                        <div class="rubrique clearfix">
                            <div class="rubrique clearfix">
                                <h2><span class="fa fa-graduation-cap"></span> Parcours scolaire</h2>
                                <ul id="parcours" class="clearfix">
                                    <li>
                                        <div class="date float-left">
                                            <span class="fa fa-stop-circle"></span>&nbsp;2022
                                        </div>
                                        <div class="details float-right">
                                            <h3>BTS SIO option SLAM en apprentissage  (en cours...)</h3>
                                            <p>Brevet de Technicien Supérieur "Services Informatiques aux
                                                Organisations", option "Solutions Logicielles et Applications
                                                Métiers" en alternance en entreprise</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="date float-left">
                                            <span class="fa fa-stop-circle"></span>&nbsp;2020
                                        </div>
                                        <div class="details float-right">
                                            <h3>Bac STI2D spécialité SIN</h3>
                                            <p>Baccalauréat "Sciences et Technologies de l'Industrie et du
                                                Développement Durable" spécialité "Systèmes d’Information et
                                                Numérique"</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="date float-left">
                                            <span class="fa fa-stop-circle"></span>&nbsp;2017
                                        </div>
                                        <div class="details float-right">
                                            <h3>Diplôme Nationale du Brevet</h3>
                                            <p></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <h2><span class="fa fa-briefcase"></span> Expériences professionnelles</h2>
                            <div class="experience clearfix">
                                <div class="col-3">
                                    <div class="lieu">DIRISI CDAD TOULON</div>
                                    <div class="date">2021- (2 sem-)</div>
                                </div>
                                <div class="col-9">
                                    <div class="profession">Auto formation </div>
                                    <div class="details">Auto formation sur les lignes de commandes UNIX,
                                    lignes de commande GIT, PHP/MySQL,Symphony,Javascript.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <!-- Partie droite -->
                        <div class="rubrique clearfix">
                            <h2><span class="fa fa-user"></span> Me contacter</h2>
                            <div class="meContacter">
                                <div class="details float-left">
                                    <a href="mailto:kadrirayane@gmail.com?subject=Contact depuis le CV en ligne"
                                       title="Mon Mail">
                                        <img class="contact-icon" src="../images/cv/mail-dreamstale47.png"
                                             alt="Icone de mail"> Gmail.com
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details float-left">
                                    <a href="https://www.linkedin.com/in/rayane-kadri-906289221/"
                                       title="Mon profil LinkedIn">
                                        <img class="contact-icon" src="../images/cv/linkedin-dreamstale45.png"
                                             alt="Icone de LinkedIn"> LinkedIn
                                    </a>
                                </div>
                            </div>
                            <div class="meContacter">
                                <div class="details float-left">
                                    <a href="https://github.com/RayaneKadri"
                                       title="Mon profil LinkedIn">
                                        <img class="contact-icon" src="../images/cv/github2-dreamstale35.png"
                                             alt="Icone de GitHub"> GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="langues" class="rubrique clearfix">
                            <h2><span class="fa fa-flag"></span> Langue</h2>
                            <div class="container">
                                <div class="langue">Français</div>
                                <div class="niveau">
                                    <span class="badge badge-dark">A1</span>
                                    <span class="badge badge-dark">A2</span>
                                    <span class="badge badge-dark">B1</span>
                                    <span class="badge badge-dark">B2</span>
                                    <span class="badge badge-dark">C1</span>
                                    <span class="badge badge-success">C2</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="langue">Anglais</div>
                                <div class="niveau">
                                    <span class="badge badge-dark">A1</span>
                                    <span class="badge badge-dark">A2</span>
                                    <span class="badge badge-dark">B1</span>
                                    <span class="badge badge-success">B2</span>
                                    <span class="badge badge-dark">C1</span>
                                    <span class="badge badge-dark">C2</span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="langue">Espagnol</div>
                                <div class="niveau">
                                    <span class="badge badge-dark">A1</span>
                                    <span class="badge badge-dark">A2</span>
                                    <span class="badge badge-success">B1</span>
                                    <span class="badge badge-dark">B2</span>
                                    <span class="badge badge-dark">C1</span>
                                    <span class="badge badge-dark">C2</span>
                                </div>
                            </div>
                        </div>
                        <div id="competences" class="rubrique clearfix">
                            <h2><span class="fa fa-wrench"></span> Compétences</h2>
                            <div class="container">
                                <div class="libelle">Intégration web</div>
                                <div class="classement classement5"></div>
                            </div>
                            <div class="container">
                                <div class="libelle">Dév. web</div>
                                <div class="classement classement4"></div>
                            </div>
                            <div class="container">
                                <div class="avertissement">En plein apprentissage! <br/> D'autres compétences s'ajouteront !</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require(__DIR__ . '/../views/templates/head.php'); ?>
<?php require(__DIR__ . '/../views/templates/navbar.php'); ?>
