<body>
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
                <div class="container">
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Navigation raccourcie</span>☰
                    </button>
                    <a class="navbar-brand" href="<?php __DIR__?>/">Rayane KADRI</a>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item <?php if ($page===0) { ?>active <?php } ?>">
                                <a href="<?php __DIR__?>/" class="nav-link">
                                    <span class="fa fa-home"></span> Accueil
                                </a>
                            </li>
                            <li class="nav-item <?php if ($page===1) { ?>active <?php } ?>">
                                <a href="pages/C_cv.php" class="nav-link">
                                    <span class="fa fa-id-badge"></span> CV
                                </a>
                            <li class="dropdown nav-item <?php if ($page===2) { ?>active <?php } ?>">
                                <a href="#" class="dropdown-toggle nav-link"
                                data-toggle="dropdown" role="button">
                                    <span class="fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header dropdown-item">
                                        Au Lycée</li>
                                    <li role="presentation" class="dropdown-item">
                                        <a role="menuitem" href="pages/C_nolark.php">Nolark</a>
                                    </li>
                                    <li role="presentation" class="dropdown-divider"></li>
                                    <li role="presentation" class="dropdown-header dropdown-item">
                                        En entreprise</li>
                                    <li role="presentation" class="dropdown-item">
                                        <a role="menuitem" href="pages/C_firstyear.php">Projet 1ére année</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
    </nav>