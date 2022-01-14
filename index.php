<?php
include(__DIR__ . '/pages/controller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        home();
    }
    elseif (isset($_GET['action'])) {
        if ($_GET['action'] == 'cv') {
            cv();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    home();
}

